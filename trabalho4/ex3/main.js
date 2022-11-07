window.onload = function(){
    const modal = document.querySelector(".modal"); //Seleciona o elemento da classe modal
    const buttonClose = modal.querySelector(".buttonClose");  //Seleciona o elemento da classe buttonClose
   
    buttonClose.addEventListener("click",function(){
        modal.style.display = 'none';                //Muda o conteúdo de modal para 'none' quando o botão de fechar a janela for clicado
    });

    const buttonOpenModal = document.getElementById("btnOpenModal");
    buttonOpenModal.addEventListener("click",function(){
        modal.style.display = 'block';                  //Abre a janela modal quando o botão da classe "btnOpenModal" for clicado
    })
}