var numeros = document.querySelectorAll('.numeros')

var gerarN = parseInt(Math.floor(Math.random() * 50) + 1)

console.log(gerarN)

numeros.forEach(num => {
    // console.log(num)
    num.addEventListener('click', function() {
        if(parseInt(num.innerHTML) != gerarN){
            num.innerHTML = '&#x2714;'
            num.style.background = 'black'
            num.style.color = '#00ff00'
        } else {
            if(parseInt(num.innerHTML) == gerarN) {
                num.innerHTML = 'X'
                num.style.background = 'black'
                num.style.color = 'red'
            }
        }
    })
    
})

function sorteio(sort) {
    if(sort != gerarN){
        if(sort < gerarN){
            numeros.forEach(nm => {
                if(parseInt(nm.innerHTML) < sort){
                    nm.style.background = 'black'
                    nm.innerHTML = '&#x2714;'
                    nm.style.color = '#00ff00'
                }
            });
        } else {
            if(sort > gerarN) {
                numeros.forEach(nm => {
                    if(parseInt(nm.innerHTML) > sort){
                        nm.style.background = 'black'
                        nm.innerHTML = '&#x2714;'
                        nm.style.color = '#00ff00'
                    }
                });
            }
        }
    }

    

    console.log(sort)

    if(sort == gerarN) {
        alert('Perdeu!!! O jogo reiniciará em 3 segundos')
        setTimeout(() => {
            window.location.reload()
        }, 3000);
    }
}



// numeros.forEach(num => {
//     console.log(num.innerHTML)
// });

// Falta fazer a lógica do jogo
