function inserir(num) {
    var conteudo = document.querySelector('#resultado').innerHTML
    document.querySelector('#resultado').innerHTML = conteudo + num
    console.log(num)
    
}

function limpar() {
    var conteudo = document.querySelector('#resultado').innerHTML = ''

}

function calcular(calcular) {
    var conteudo = document.querySelector('#resultado').innerHTML
    document.querySelector('#resultado').innerHTML = eval(conteudo)
    
}