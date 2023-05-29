const inputs = document.querySelectorAll('input')
const spans = document.querySelectorAll('.required')
const form = document.querySelector('form')
const emailRegex =  /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

form.addEventListener('submit', function(event){
    if (inputs[0].value.length < 3 || !emailRegex.test(inputs[1].value) || inputs[2].value.length < 8) {
        event.preventDefault()
        validName()
        validEmail()
        validPass()
    }
})

function setError(errorValid) {
    inputs[errorValid].style.border = '1.7px solid red'
    inputs[errorValid].style.boxShadow = '0px 0px 7px red'
    spans[errorValid].style.display = 'block'
}

function removeError(valid) {
    spans[valid].style.display = 'none'
    inputs[valid].style.border = '1.7px solid #3B70E0'
    inputs[valid].style.boxShadow = '0px 0px 7px #3B70E0'
}

function validName() {
    if (inputs[0].value.length < 3) {
        setError(0)
    } else {
        removeError(0)
    }
}

function validEmail() {
    if (!emailRegex.test(inputs[1].value)) {
        setError(1)
    } else {
        removeError(1)
    }
}

function validPass() {
    if (inputs[2].value.length < 8) {
        setError(2)
    } else {
        removeError(2)
    }
}