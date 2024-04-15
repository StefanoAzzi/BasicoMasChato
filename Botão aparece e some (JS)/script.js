function apareceSome(){
    let novoElemento = document.getElementById('novoElemento')
    // O id do seu futuro novo elemento

    let textoLegal = "muito legal mesmo"
    // O texto que será inserido

    let body = document.body 
    // Chamando o body do html, mas pode ser substituido por um let pai = document.getElementById('pai')

    if(!novoElemento){
        // Verificando se ele já foi criado, se sim ele vai criar

        novoElemento = document.createElement('p')
         // O 'p' é o tipo de html q tu quer, pode ser 'div' por exemplo
        
        novoElemento.innerText = `Texto legal, ${textoLegal}.`
        // Use craze para poder colocar variaveis
        
        body.appendChild(novoElemento)
        // O novo elemento sempre tem que estar dentro dos parentes, e o body vai ser o elemento pai, 
        // tipo tu vai querer colocar isso dentro de uma div 
        
        novoElemento.id = "novoElemento"
        // O id tem que ser o mesmo do de la de cima, "let novoElemento"
    
    } else {
        // Se não ele vai excluir

        body.removeChild(novoElemento)
        // A mesma lógica do appendChild
    }
}