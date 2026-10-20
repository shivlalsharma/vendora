document.addEventListener("DOMContentLoaded", function () {
    // Dynamic Password Strength Meter
    const passwordInput = document.getElementById("password");
    const bars = [
        document.getElementById("bar1"),
        document.getElementById("bar2"),
        document.getElementById("bar3"),
        document.getElementById("bar4"),
    ];
    const strengthText = document.getElementById("strengthText");

    passwordInput.addEventListener("input", function (e) {
        const val = e.target.value;
        let score = 0;

        if (val.length >= 8) score++;
        if (/[0-9]/.test(val)) score++;
        if (/[a-z]/.test(val) && /[A-Z]/.test(val)) score++;
        if (/[^A-Za-z0-9]/.test(val)) score++;

        // Reset bars
        bars.forEach(
            (b) =>
                (b.className =
                    "h-1 flex-1 rounded-full bg-gray-200 transition-colors"),
        );

        if (val.length === 0) {
            strengthText.textContent = "Password strength";
            strengthText.className = "text-gray-500";
            return;
        }

        const color =
            score <= 1
                ? "bg-red-500"
                : score === 2
                  ? "bg-amber-400"
                  : score === 3
                    ? "bg-[#00875A]"
                    : "bg-[#006C47]";
        const labels = ["Weak", "Fair", "Good", "Strong"];

        for (let i = 0; i < score; i++) {
            bars[i].className =
                `h-1 flex-1 rounded-full ${color} transition-colors`;
        }

        strengthText.textContent = `Strength: ${labels[score - 1] || "Weak"}`;
        strengthText.className =
            score <= 1
                ? "text-red-500 font-bold"
                : score === 2
                  ? "text-amber-500 font-bold"
                  : "text-[#00875A] font-bold";
    });
});
