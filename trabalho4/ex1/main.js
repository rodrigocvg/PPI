document.addEventListener('DOMContentLoaded',function(){
    const h1 = document.querySelector("h1");
    h1.addEventListener("click",function(){
        h1.textContent = "Dono do currículo";
    })
})



document.addEventListener('DOMContentLoaded',function(){
    const nodeh2 = document.querySelectorAll("h2");
    for(let node of nodeh2)
        node.addEventListener("click",() => node.textContent  = "Obrigado");
});



    
