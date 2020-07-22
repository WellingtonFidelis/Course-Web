<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title> 
        
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <main>  
            <div id="janela_formulario">
                
                <form id="formulario_transportadora">
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" value="" name="nometransportadora" id="nometransportadora">
                    
                    <label for="cep">CEP (ex: 58000-100)</label>
                    <input type="text" value="" name="cep" id="cep" maxlength="9" mask="99999-999">
                    
                    <label for="endereco">Endereço</label>
                    <input type="text" value="" name="endereco" id="endereco">

                    <label for="cidade">Cidade</label>
                    <input type="text" value="" name="cidade" id="cidade">

                    <label for="estado">Estado</label>
                    <input type="text" value="" name="estado" id="estado">

                    <label for="bairro">Bairro</label>
                    <input type="text" value="" name="bairro" id="bairro">
                    
                    <input type="submit" value="Confirmar alteração">  
                    
                    <div id="mensagem">
                        <p></p>
                    </div>
                </form> 
                
            </div>
        </main>
        
        <script src="_js/jquery.js"></script>
        <script>
            
            $('#cep').on('blur', function (e) {
                let cep = $('#cep').val();
                let validaCep = /^[0-9]{5}-?[0-9]{3}$/;
                if ( validaCep.test(cep) ) {
                    $('#mensagem').hide();
                    doCep(cep);
                } else {
                    $('#mensagem').show();
                    $('#mensagem p').html('Cep inválido');

                }
            });
            function doCep (value) {
                $.ajax({
                    type: 'GET',
                    url: `http://viacep.com.br/ws/${value}/json`,
                    async: false
                }).done( function(data) {
                    //console.log(data);
                    $('#endereco').val(data.logradouro);
                    $('#cidade').val(data.localidade);
                    $('#estado').val(data.uf);
                    $('#bairro').val(data.bairro);
                }).fail(function(){
                    console.log('Erro na consulta!');
                });
            }

            function doWeather (value) {
                $.ajax(function () {
                    type: 'GET',
                    url: `http://api.openweathermap.org/data/2.5/weather?q=${cidade},br&units=metric&lang=pt`
                }).done(function (data) {

                }).fail(function(){

                });
            }
            
        </script>
    </body>
</html>