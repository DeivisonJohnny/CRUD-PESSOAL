const menu = document.querySelector('#menu')
const nav = document.querySelectorAll('nav')

function clickMenu(){
    if(nav[0].style.top == '58px') {
        nav[0].style.top = '-150px'
    } else {
        nav[0].style.top = '58px'
    }
}

function exitMenu() {
    if(nav[0].style.top == '58px') {
        nav[0].style.top = '-150px'
    }
}
