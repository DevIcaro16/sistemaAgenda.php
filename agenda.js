'use strict' ; 


const agendaForm = document.getElementById("agendamg");

agendaForm.addEventListener('submit',enviar);

function enviar(e){

    e.preventDefault();
    const formData = new FormData();
    const searchParams = new URLSearchParams();

    for(const params of formData){

        searchParams.append(params[0],params[1],params[2],params[3],params[4],params[5]);
    }

    fetch('agenda.php', {method: 'POST', body: formData}
    
    ).then(function(response){

        document.getElementById('nome_turma').value = " ";
        document.getElementById('data_anotacao').value = " ";
        document.getElementById('disciplina').value = " ";
        document.getElementById('professor').value = " ";
        document.getElementById('conteudo').value = " ";
        document.getElementById('observacao').value = " ";

        return alert('Registro Feito Com Sucesso! ');
    }).catch(function(error){
        

        return alert('Houve algum problema no cadastro! ');

    }); 

}