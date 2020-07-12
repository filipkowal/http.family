let inputs = [];
let initialPriceElement = document.querySelector('.final-price');
const initialPrice = parseInt(initialPriceElement.innerHTML)

inputs = Array.from(document.querySelectorAll('input'));

function getPrices() {
    let sum = 0;

    inputs.forEach(input => {
        if (input.checked) {
            sum += parseInt(input.value);
        } else {
            if (input.type === 'number' && input.getAttribute('price') && input.value) {
                sum += parseInt(input.value) * parseInt(input.getAttribute('price'));
            }
        }
    })

    return sum;
}

function changeFinalPrice() {
    const sum = getPrices();
    let finalPrice = initialPrice + sum;
    initialPriceElement.innerHTML = finalPrice;
}

function watchInputs() {
    inputs.forEach(input => {
        input.addEventListener('change', (event) => {
            changeFinalPrice();
        });
    })
}

changeFinalPrice();
watchInputs();

function toggleContactForm() {
    let shouldHideElements = Array.from(document.querySelectorAll('.should-hide'));
    let optionsForm = document.querySelector('.options-form');
    let back = document.querySelector('.hide-form-back');

    function toggleElements() {
        event.preventDefault();
        shouldHideElements.forEach(element => {
            element.classList.contains('hidden') ? element.classList.remove('hidden') : element.classList.add('hidden');
        })
    }

    optionsForm.addEventListener('submit', event => {
        toggleElements();
    })
    back.addEventListener('click', event => {
        toggleElements();
    })
}
toggleContactForm();

// let contactForm = document.querySelector('.contact-form');
// console.log(contactForm);
// contactForm.addEventListener('submit', event => {

//     event.preventDefault();
//     console.log('trying to send');

//     // sendEmail()
// })
