const currentValue = document.querySelector("#num");
const inputValue = document.querySelector("input");
inputValue.oninput = (() => {
    let result = inputValue.value;
    currentValue.textContent = result;
    currentValue.style.left = (result / 10.2) + "%";
});

const btnModal = document.querySelector("#calculadora button");
let result = document.querySelector("#modal .modal-body .result");
const getValues = () => {
    const variation = document.querySelector("input").value.trim();
    const amount = document.querySelector("#calculadora #amount").value.replace(",", ".").trim();
    const sum = (parseFloat(amount) * parseFloat(variation)) / 53;
    result.innerHTML = `<span>R$</span> ${sum.toFixed(2).replace('.', ',')}`;
};
btnModal.addEventListener('click', getValues);