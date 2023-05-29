const inputs = document.querySelectorAll('input')
const required = document.querySelectorAll('.required')
const form = document.querySelector('form')
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

form.addEventListener('submit', (event) =>{
    if(!emailRegex.test(inputs[1].value) || inputs[2].value.length < 8) {
        event.preventDefault()
        validUser()
        validPass()
    }
})

function setError(errorValid){
    required[errorValid].style.display = 'block'
    inputs[errorValid].style.border = '1px solid red'
    inputs[errorValid].style.boxShadow = '0px 0px 10px -2px red'
}

function removeError(valid) {
    required[valid].style.display = 'none'
    inputs[valid].style.border = '1px solid #4d5b75'
    inputs[valid].style.boxShadow = 'none'
}

function validUser() {
    if(!emailRegex.test(inputs[1].value)) {
        setError(1)
    } else {
        removeError(1)
    }
}

function validPass() {
    if(inputs[2].value.length < 8) {
        setError(2)
    } else {
        removeError(2)
    }
}

function mostrarPass(){
    console.log('click')
    if (document.querySelectorAll('input')[2].type == 'password') {
        document.querySelectorAll('input')[2].type = 'text'
    } else {
        document.querySelectorAll('input')[2].type = 'password'
    }
}
