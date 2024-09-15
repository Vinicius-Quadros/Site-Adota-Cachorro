
 
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

function onlynumber(evt) { //Bloqueia letras e caracteres especiais, só digita número
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if( charCode < 45 || charCode > 58){

        return false;
    }
    return true;
}




function validar(){
    if( document.form.email.value.indexOf('.')== -1){
        alert('Faltou um "." no campo E-Mail')
        return false
    }
    if( document.form.email.value.indexOf('@')== -1){
        alert('Faltou um "@" no campo E-Mail')
        return false
    }
    
    let cpf 
    cpf = document.form.cpf.value.replace(/[^0-9]/g,"").length

    if(cpf<11){
        alert('O número informado é muito pequeno para ser um cpf!')
        return false;
    }

    let telefone
    telefone = document.form.telefone.value.replace(/[^0-9]/g,"").length

    if(telefone<11){
        alert('O número informado é muito pequeno para ser um telefone!')
        return false;
    }


    let cep
    cep = document.form.cep.value.replace(/[^0-9]/g,"").length
    
    if(cep<8){
        alert('O número informado é muito pequeno para ser um CEP!')
        return false;
    }

    else{
        alert('Cadastro feito com sucesso! Tenha um bom dia!')
    }
};

function adotar(){
    if( document.form.email.value.indexOf('.')== -1){
        alert('Faltou um "." no campo E-Mail')
        return false
    }
    if( document.form.email.value.indexOf('@')== -1){
        alert('Faltou um "@" no campo E-Mail')
        return false
    }
    
    let cpf 
    cpf = document.form.cpf.value.replace(/[^0-9]/g,"").length

    if(cpf<11){
        alert('O número informado é muito pequeno para ser um cpf!')
        return false;
    }

    let telefone
    telefone = document.form.telefone.value.replace(/[^0-9]/g,"").length

    if(telefone<11){
        alert('O número informado é muito pequeno para ser um telefone!')
        return false;
    }


    let cep
    cep = document.form.cep.value.replace(/[^0-9]/g,"").length
    
    if(cep<8){
        alert('O número informado é muito pequeno para ser um CEP!')
        return false;
    }

    else{
        alert('Cadastro feito com sucesso! Entraremos em contato para finalizar o processo de Adoção, PARABÉNS!')
    }
};




