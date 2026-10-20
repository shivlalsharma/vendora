document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".otp-digit");
    const fullOtpInput = document.getElementById("fullOtp");
    const otpForm = document.getElementById("otpForm");

    // Dynamically style border on focus/blur
    inputs.forEach((input, index) => {
        input.addEventListener("focus", function () {
            inputs.forEach((i) =>
                i.classList.remove("border-2", "border-[#00875A]"),
            );
            input.classList.remove("border", "border-gray-200");
            input.classList.add("border-2", "border-[#00875A]");
        });

        input.addEventListener("blur", function () {
            if (!input.value) {
                input.classList.remove("border-2", "border-[#00875A]");
                input.classList.add("border", "border-gray-200");
            }
        });

        // Auto-move forward on type
        input.addEventListener("input", function (e) {
            const val = e.target.value.replace(/[^0-9]/g, "");
            e.target.value = val;

            if (val && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
            syncFullOtp();
        });

        // Backspace moves backward
        input.addEventListener("keydown", function (e) {
            if (e.key === "Backspace" && !e.target.value && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });

    // Ensure 1st box is focused immediately on page load
    if (inputs.length > 0) {
        inputs[0].focus();
        inputs[0].classList.remove("border", "border-gray-200");
        inputs[0].classList.add("border-2", "border-[#00875A]");
    }

    // Handle Paste entire 6-digit code
    inputs[0].addEventListener("paste", function (e) {
        e.preventDefault();
        const pasteData = (e.clipboardData || window.clipboardData)
            .getData("text")
            .trim();
        const digits = pasteData.replace(/\D/g, "").split("").slice(0, 6);

        digits.forEach((digit, i) => {
            if (inputs[i]) {
                inputs[i].value = digit;
                inputs[i].classList.remove("border", "border-gray-200");
                inputs[i].classList.add("border-2", "border-[#00875A]");
            }
        });

        if (digits.length === 6) {
            inputs[5].focus();
        } else if (digits.length > 0 && digits.length < 6) {
            inputs[digits.length].focus();
        }
        syncFullOtp();
    });

    function syncFullOtp() {
        let code = "";
        inputs.forEach((i) => (code += i.value));
        fullOtpInput.value = code;
    }

    otpForm.addEventListener("submit", function () {
        syncFullOtp();
    });

    // Countdown Timer (04:52)
    let duration = 5 * 60;
    const timerDisplay = document.getElementById("timer");

    const countdownInterval = setInterval(() => {
        const minutes = Math.floor(duration / 60);
        const seconds = duration % 60;

        timerDisplay.textContent = `${String(minutes).padStart(2, "0")}:${String(seconds).padStart(2, "0")}`;

        if (--duration < 0) {
            clearInterval(countdownInterval);
            timerDisplay.textContent = "00:00";
        }
    }, 1000);
});
