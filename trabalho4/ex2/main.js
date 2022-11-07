document.addEventListener('DOMContentLoaded',function(){
    const nodeh2 = document.querySelectorAll("h2");
    for(let node of nodeh2)
        node.addEventListener("click",() => node.nextElementSibling.style.display = 'none');
});

document.addEventListener('DOMContentLoaded',function(){
    const nodeh2 = document.querySelectorAll("h2");
    for(let node of nodeh2)
        node.addEventListener("dblclick",() => node.nextElementSibling.style.display ='block');
});