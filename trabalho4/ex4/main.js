window.onload = function(){ //Fução ocorre quando a página é carregada
    const campo = document.querySelector("#jogadores"); //Seleciona o elemento com id = jogadores
    campo.addEventListener("keyup",e =>{
        if(e.key === "Enter") //Faz com que o evento da tecla "Enter" envie a resposta e adicione um jogador à lista
            addJogador();
    });
}

function addJogador(){
    const campo = document.querySelector("#jogadores"); //Seleciona o elemento com id = jogadores
    const listaJogadores = document.querySelector("ol"); //Seleciona a lista ordenadada de jogadores

    const addLi = document.createElement("li");  //Cria um elemento na lista
    const novoSpan = document.createElement("span"); //Cria um span que serve de orientação
    const novoBotao = document.createElement("button"); //Cria um botão que serve para excluir o elemento inserido

    novoSpan.textContent = campo.value;
    novoBotao.textContent = "❌"; //Contexto do botao

    addLi.appendChild(novoSpan); 
    addLi.appendChild(novoBotao); //Adiciona o botao como filho do elemento anterior da lista
    
    listaJogadores.appendChild(addLi); //Adiciona o elemento novo na lista

    novoBotao.onclick = function(){
        listaJogadores.removeChild(addLi); //Função do botão para remover um elemento da lista
    }
    campo.value = '';

}