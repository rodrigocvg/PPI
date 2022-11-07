window.onload = function(){
    document.forms.formCadastro.onsubmit = validaForm; //Chama a função validaForm quando a página for carregada
}

function validaForm(e){ //Função que verifica se o formulario foi completamente preenchido
    let form = e.target;
    let formValido = true;

    const spanUser = form.usuario.nextElementSibling; //spanUser recebe o proximo elemento irmao do formulario (user)
    const spanSenha = form.senha.nextElementSibling;//spanSenha recebe o proximo elemento irmao do formulario (senha)
    const spanEmail = form.email.nextElementSibling; //spanEmail recebe o proximo elemento irmao do formulario (email)

    spanUser.textContent = ""; //declara como sem conteúdo 
    spanSenha.textContent = "";//declara como sem conteúdo 
    spanEmail.textContent = "";//declara como sem conteúdo 

    if(form.usuario.value === ""){ //verifica se o campo usuario nao foi preenchido
        spanUser.textContent = 'O usuário deve ser preenchido'; //Exibe o conteudo do elemento spanUser
        formValido = false;//deixa como falso
    }
    if(form.senha.value === ""){//verifica se o campo senha nao foi preenchido
        spanSenha.textContent = 'A senha deve ser preenchido';//Exibe o conteudo do elemento spanSenha
        formValido = false; //deixa como falso
    }
    if(form.senha.value === ""){ //verifica se o campo email nao foi preenchido
        spanEmail.textContent = 'O email deve ser preenchido'; //Exibe o conteudo do elemento spanEmail
        formValido = false; //deixa como falso
    }
    return formValido; //retorna o booleano se o formulário foi corretamente preenchido
}