const inputs = document.querySelectorAll('.inputs')
const form = document.getElementById('form')
const label = document.querySelectorAll('.required')
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

form.addEventListener('submit', (event) => {
    if (inputs[0].value.length < 3 || !emailRegex.test(inputs[1].value) || inputs[2].value.length < 8 || inputs[2].value != inputs[3].value && inputs[3].value.length >= 8) {
    console.log("Não passou")
    event.preventDefault()    
    }
    nameValidade()
    emailValidate()
    mainPass()
    compararPass()
})

function setError(index) {
    inputs[index].style.border = '1.7px solid #e63636'
    label[index].style.display = 'block'
}

function validado(valid) {
    inputs[valid].style.border = ''
    label[valid].style.display = 'none'
}

function nameValidade() {
    if(inputs[0].value.length < 3) {
        console.log('O nome deve ter pelo menos 3 caracteres')
        setError(0)
    } else {
        console.log('Nome validado')
        validado(0)
    }
}

function emailValidate() {
    if(!emailRegex.test(inputs[1].value)) {
        setError(1)
    } else {
        validado(1)
    }
}

function mainPass() {
    if(inputs[2].value.length < 8) {
        setError(2)
    } else {
        validado(2)
        compararPass()
    }

}


function compararPass() {
    if (inputs[2].value == inputs[3].value && inputs[3].value.length >= 8) {
        validado(3)
    } else {
        setError(3)
    }
}