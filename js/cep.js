function buscaCep(){
    let cep = document.getElementById('cep').value;
    if(cep !== ""){
        let url = "https://brasilapi.com.br/api/cep/v1/" + cep;

        let req= new XMLHttpRequest();
        req.open("GET", url);
        req.send();
        
        
        req.onload = function(){
            if(req.status ==200){
                let edereco = JSON.parse(req.response)
                document.getElementById("endereco").value = edereco.street;
                document.getElementById("bairro").value = edereco.neighborhood;
                document.getElementById("cidade").value = edereco.city;
                document.getElementById("estado").value = edereco.state;
                
            }
            else if(req.status == 404){
                alert("CEP inválido") 
                document.getElementById('cep').value = ""
            }
            else{
                alert("Erro ao fazer a requisição");
            }
        }
    }
}


window.onload = function(){
    let cep = document.getElementById("cep");
    cep.addEventListener("blur", buscaCep);
}