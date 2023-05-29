const mario = document.querySelector('.mario')
const tubo = document.querySelector('.tubo')
const jogar = document.querySelector('#jogar')
const aPulo = document.querySelector('.pulo')
var record = document.querySelector('#record')

recordIni = parseFloat(0.000)

var recordloop = setInterval(() => {
    record.innerHTML = recordIni++
}, 500);






const pulo = () => {
    mario.classList.add('pulo')
    setTimeout(() => {
        mario.classList.remove('pulo')
    }, 500)
}

const Cpulo = () => {
    mario.classList.add('pulo')
    setTimeout(() => {
        mario.classList.remove('pulo')
    }, 500)
}

const loop = setInterval(() => {
    const tuboPosition = tubo.offsetLeft
    const marioPosition = +window.getComputedStyle(mario).bottom.replace('px','')
    const nuvem = document.querySelector('#container-nuvem').offsetLeft
    console.log(`nuvem ${nuvem}`)
    console.log(`Mario ${marioPosition}`)
    // console.log(tuboPosition)
    if(tuboPosition <= 93.8 && tuboPosition > 0 && marioPosition < 55) {
        tubo.style.animation = 'none'
        tubo.style.left = `${tuboPosition}px`
        mario.style.animation = `none`
        mario.style.bottom = `${marioPosition}px`
        document.querySelector('#container-nuvem').style.animation = `none`
        document.querySelector('#container-nuvem').style.left = `${nuvem}px`
        
        clearInterval(recordloop)
    }
},20)



document.addEventListener('keydown', pulo)
// document.addEventListener('click', Cpulo)

