window.onload = function(){
    buttons = document.querySelectorAll("nav button");    //Seleciona todos os botões filhos de um elemento nav
    for(let button of buttons){
        button.onclick = () => openTab(button.dataset.tabname);   //Quqndo clicar no botão, será chamado a função openTab, para abrir o conteúdo daquela página
    }
    openTab("Gol");
}

function openTab(tabname){ //função openTab utilziada na função acima
    
    const ultTabAtivo = document.querySelector(".tabActive"); //Variável que recebe o ultimo conteúdo de um dos 4 botões
    if(ultTabAtivo !== null)             
        ultTabAtivo.className = "";  //Se for nulo, o nome de sua classe recebe ""

    const ultBotAtivo = document.querySelector(".buttonActive"); //Variável que recebe o conteudo do botão que está ativo e mostrando na tela no momento
    if(ultBotAtivo !== null)
        ultBotAtivo.className = ""; //Se for nulo, o nome de sua classe recebe ""

    const query1 = ".tabs > section[data-tabname='" + tabname + "']";   //Variável recebe o "caminho" para acessar o elemento de uma determinada seção
    const query2 = "nav button[data-tabname='" + tabname + "']"; //Variável recebe o "caminho" para acessar um botão 

    document.querySelector(query1).className = "tabActive"; //Atribui a classe "tabActive" para o elemento
    document.querySelector(query2).classList = "buttonActive"; //Atribui a classe "buttonActive" para um botão
}