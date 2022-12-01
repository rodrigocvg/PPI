window.addEventListener('load',funcAlerta);

function funcAlerta(){
    alert('A história comecou quando um relógio esquisito');
    console.log('A história comecou quando um relógio esquisito');
};

document.addEventListener('DOMContentLoaded',function(){
    const img = document.querySelector("img");
    img.onclick = function(){
        this.src = "messianao.jpeg";
    }
});

document.addEventListener('DOMContentLoaded',function(){
    const nodeh1 = document.querySelector("h1");
    nodeh1.addEventListener("click",function(){
        nodeh1.textContent = "MUDOUKKKKKKK";
    });
});

document.addEventListener("DOMContentLoaded",function(){
    const h2s = document.querySelector("h2");
    h2s.addEventListener("click",mudaH2);
});

function mudaH2(){
    const h2s = document.querySelectorAll("h2");
    for(let node of h2s)
        node.textContent = "falei q ia muda";
};

window.onload = function(){
    const modal = document.querySelector(".modal");
    const botaoFechar = document.querySelector(".fecharModal");

    botaoFechar.addEventListener("click",function(){
        modal.style.display = 'none';
    });

    const botaoAbrirModal = document.getElementById("abrirModal");
    botaoAbrirModal.addEventListener("click",function(){
        modal.style.display= 'block';
    });

    
    const campo = document.querySelector("#qqq"); //Seleciona o elemento com id = jogadores
    campo.addEventListener("keyup",e =>{
        if(e.key === "Enter") //Faz com que o evento da tecla "Enter" envie a resposta e adicione um jogador à lista
            addElem();
    });
};




function addElem(){
    const campo = document.querySelector("#qqq");
    const lista = document.querySelector("ul");

    const addLi = document.createElement("li");
    addLi.textContent = campo.value;
    lista.appendChild(addLi);
};



