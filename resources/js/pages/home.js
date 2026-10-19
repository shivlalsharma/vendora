document.addEventListener("DOMContentLoaded", function () {
    const track = document.getElementById("sliderTrack");
    const slider = document.getElementById("heroSlider");
    const dots = slider.querySelectorAll(".hero-dot");
    const dotIndicators = slider.querySelectorAll(".dot-indicator");
    const originalSlides = Array.from(track.querySelectorAll(".hero-slide"));
    const totalOriginalSlides = originalSlides.length;

    if (totalOriginalSlides === 0) return;

    // 1. Create Infinite Clones (First to end, Last to beginning)
    const firstClone = originalSlides[0].cloneNode(true);
    const lastClone = originalSlides[totalOriginalSlides - 1].cloneNode(true);
    firstClone.classList.add("clone");
    lastClone.classList.add("clone");

    track.appendChild(firstClone);
    track.insertBefore(lastClone, originalSlides[0]);

    // We start on real slide 1 (Index 1)
    let currentIndex = 1;
    let isTransitioning = false;
    let autoPlayTimer = null;
    const slideDuration = 700; // ms

    // Position track initially without animation
    function setTrackPosition(animate = true) {
        if (animate) {
            track.style.transition = `transform ${slideDuration}ms cubic-bezier(0.25, 1, 0.5, 1)`;
        } else {
            track.style.transition = "none";
        }
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    setTrackPosition(false);

    // Update Dots UI
    function updateDots() {
        // Map clone indices to real dot index (0, 1, or 2)
        let realIndex = currentIndex - 1;
        if (realIndex < 0) realIndex = totalOriginalSlides - 1;
        if (realIndex >= totalOriginalSlides) realIndex = 0;

        dotIndicators.forEach((dot, idx) => {
            if (idx === realIndex) {
                dot.className =
                    "dot-indicator block w-2.5 h-2.5 rounded-full bg-[#00875A] scale-110 transition-all duration-300";
            } else {
                dot.className =
                    "dot-indicator block w-2.5 h-2.5 rounded-full bg-gray-300 group-hover/dot:bg-gray-400 group-hover/dot:scale-125 transition-all duration-300";
            }
        });
    }

    // Go to next slide (Smooth continuous loop)
    function nextSlide() {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex++;
        setTrackPosition(true);
        updateDots();
    }

    // Go to prev slide
    function prevSlide() {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex--;
        setTrackPosition(true);
        updateDots();
    }

    // Seamless Snap Reset on Transition End
    track.addEventListener("transitionend", () => {
        isTransitioning = false;
        // Reached cloned first slide -> instantly snap to real first slide
        if (currentIndex === totalOriginalSlides + 1) {
            currentIndex = 1;
            setTrackPosition(false);
        }
        // Reached cloned last slide -> instantly snap to real last slide
        else if (currentIndex === 0) {
            currentIndex = totalOriginalSlides;
            setTrackPosition(false);
        }
    });

    // Auto Play Interval
    function startAutoPlay() {
        stopAutoPlay();
        autoPlayTimer = setInterval(nextSlide, 5000);
    }

    function stopAutoPlay() {
        if (autoPlayTimer) {
            clearInterval(autoPlayTimer);
            autoPlayTimer = null;
        }
    }

    // Click on Dots
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            if (isTransitioning) return;
            currentIndex = index + 1;
            setTrackPosition(true);
            updateDots();
            startAutoPlay();
        });
    });

    // Pause Auto Play on Hover
    slider.addEventListener("mouseenter", stopAutoPlay);
    slider.addEventListener("mouseleave", startAutoPlay);

    // ================= Touch & Mouse Drag Swiping =================
    let startX = 0;
    let moveX = 0;
    let isDragging = false;

    function handleDragStart(x) {
        if (isTransitioning) return;
        stopAutoPlay();
        startX = x;
        moveX = 0;
        isDragging = true;
    }

    function handleDragMove(x) {
        if (!isDragging) return;
        moveX = x;
    }

    function handleDragEnd() {
        if (!isDragging) return;
        isDragging = false;
        const diff = startX - moveX;
        if (moveX !== 0 && Math.abs(diff) > 40) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
        startX = 0;
        moveX = 0;
        startAutoPlay();
    }

    // Touch events (Mobile)
    slider.addEventListener(
        "touchstart",
        (e) => handleDragStart(e.touches[0].clientX),
        {
            passive: true,
        },
    );
    slider.addEventListener(
        "touchmove",
        (e) => handleDragMove(e.touches[0].clientX),
        {
            passive: true,
        },
    );
    slider.addEventListener("touchend", handleDragEnd);

    // Mouse drag events (Desktop)
    slider.addEventListener("mousedown", (e) => {
        if (e.target.closest("button") || e.target.closest("a")) return;
        handleDragStart(e.clientX);
    });
    window.addEventListener("mousemove", (e) => handleDragMove(e.clientX));
    window.addEventListener("mouseup", handleDragEnd);

    // Start
    updateDots();
    startAutoPlay();
});
