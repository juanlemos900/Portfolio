const submit = window.document.querySelector('.button-link.-submit')

var nome = document.getElementById("name")

submit.addEventListener('click', function() {
    if (nome.value != "" ) {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso!');
    }else{
        alert('Insira um nome')
    }
});
