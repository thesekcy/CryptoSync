$(document).ready(function(){
    $('#cep').blur(function(){
        var cep = $('#cep').val() || '';
        if(!cep){
            return
        }
        var url = 'https://viacep.com.br/ws/' + cep + '/json';
        $.getJSON(url, function(data){
            if("error" in data){
                return
            }

            $('#rua').val(data.logradouro);
            $('#bairro').val(data.bairro);
            $('#cidade').val(data.localidade);
            $('#uf').val(data.uf);
        });
    });
});