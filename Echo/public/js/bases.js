const rangeInput = document.querySelectorAll(".range-input input");
const salaryInput = document.querySelectorAll(".salary-input input");
const progressBar = document.querySelector(".slider .progress");
let salaryGap = 1000;
salaryInput.forEach(input => {
    input.addEventListener("input", e => {
        let minVal = parseInt(salaryInput[0].value),
            maxVal = parseInt(salaryInput[1].value);

        if (((maxVal - minVal) >= salaryGap) && maxVal >= 250000) {
            if (e.target.className === "input-min") {//if an active input is min input
                rangeInput[0].value = minVal;
                progressBar.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            } else {
                rangeInput[1].value = maxVal;
                progressBar.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        }


    });
});
rangeInput.forEach(input => {
    input.addEventListener("input", e => {
        let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

        if ((maxVal - minVal) < salaryGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - salaryGap;
            } else {
                rangeInput[1].value = minVal + salaryGap;
            }
        } else {

            salaryInput[0].value = minVal;
            salaryInput[1].value = maxVal;
            progressBar.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            progressBar.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }


    });
});


//Slider vacantes

const sliderValue = document.querySelector("#spanVacantes");
const inputSlider = document.querySelector("#rango_vacantes");
inputSlider.oninput = (() => {
    let value = inputSlider.value;
    sliderValue.textContent = value;
    sliderValue.style.left = (value / 2) + "%";
    sliderValue.classList.add("show");
});
inputSlider.onblur = (() => {
    sliderValue.classList.remove("show");
});
