const rangeInput = document.querySelectorAll(".range-input input");
const salaryInput = document.querySelectorAll(".salary-input input");
const progressBar = document.querySelector(".slider .progress");
const asideHome = document.querySelector("#aside-dashboard");
const wrapersHome = document.querySelectorAll(".wrapper-home");
const wrap1 = document.querySelector("#wrap1");
const wrap2 = document.querySelector("#wrap2");
const filtros = document.querySelector(".filtros");
const toggleFiltros = document.querySelector("#toggle");
const toggleCriterios = document.querySelector("#toggle-criterios");

//Botones submit

const openButtons = document.querySelectorAll(".open-popup-btn");
const closeButtons = document.querySelectorAll(".dismiss-popup-btn");
const popup = document.querySelector(".popup");
const form = document.querySelector("form")


if (this.window.innerWidth < 768) {
    asideHome.classList.add("fixed", "w-full", "top58px", "bg-color-fondo-200", "max-w-full");
    wrapersHome.forEach((wrap) => {
        wrap.classList.add("fixed", "w-1/2", "flex", "flex-col", "justify-center", "bg-color-fondo-200");
    });
    wrap1.classList.add("top110px");
    filtros.classList.remove("md:border")
    wrap2.classList.add("left-1/2", "z-10", "flex", "justify-start", "pt-2");
};


//animaciones botones
openButtons.forEach((openButton) => {
    openButton.addEventListener("click", (e) => {
        e.preventDefault();
        popup.classList.add("active");
        setTimeout(() => {
            popup.classList.remove("active");
            form.submit();
        }, 3000);
    });
});

closeButtons.forEach((closeButton) => {
    closeButton.addEventListener("click", () => {
        popup.classList.remove("active");
    });
});

//Cálculo de los filtros
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

