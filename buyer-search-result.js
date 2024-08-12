    document.addEventListener("DOMContentLoaded", function () {
    const rangeInput = document.getElementById("loan-range");
    const loanAmountDisplay = document.querySelector(".loan-amount");
    const labels = document.querySelectorAll(".frame-128 span");

    function updateLoanAmount(value) {
        loanAmountDisplay.textContent = `$${(value / 1000).toFixed(0)}K`;

        labels.forEach((label) => {
        if (parseInt(label.getAttribute("data-value")) === parseInt(value)) {
            label.style.fontWeight = "bold";
        } else {
            label.style.fontWeight = "normal";
        }
        });
    }

    rangeInput.addEventListener("input", function () {
        updateLoanAmount(this.value);
    });

    // Initialize display
    updateLoanAmount(rangeInput.value);
    });
