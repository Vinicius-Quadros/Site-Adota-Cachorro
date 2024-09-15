 
 function lettersOnly(evt) { //Bloqueia números só letras e caracteres especiais 
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 33 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122) &&(charCode < 191 || charCode >253)) {
        return false;
    }
    return true;
}

function Mensagem(){
    if( document.form.email.value.indexOf('.')== -1){
        alert('Faltou um "." no campo E-Mail')
        return false
    }
    if( document.form.email.value.indexOf('@')== -1){
        alert('Faltou um "@" no campo E-Mail')
        return false
    }
    if( document.form.nome.value == ""){
        alert('Preencha o campo NOME!')
        return false
    }
    if( document.form.mensagem.value == ""){
        alert('Preencha o nome MENSAGEM!')
        return false
    }
    if( document.form.assunto.value == ""){
        alert('Preencha o campo AAUNTO!')
        return false
    }
    if(document.form.mensagem.value.length < 10){
        alert('O conteudo deve conter pelo menos 10 caracteres!')
        return false
    }
}