<?php
    // Criar objeto de conexao
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    // selecao de estados
    $select = "SELECT estadoID, nome ";
    $select .= "FROM estados ";
    $lista_estados = mysqli_query($conecta, $select);
    if(!$lista_estados) {
        die("Erro no banco");
    }
?>

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
                    <input type="text" name="nometransportadora" id="nometransportadora">

                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco">

                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade">

                    <select name="estados">
                        <?php
                            while($linha = mysqli_fetch_assoc($lista_estados)) {
                        ?>
                            <option value="<?php echo $linha["estadoID"];  ?>">
                                <?php echo utf8_encode($linha["nome"]);  ?>
                            </option>
                        <?php
                            }
                        ?>                        
                    </select>
                    
                    <input type="submit" value="Confirmar inclusão">  
                    
                    <div id="mensagem">
                        <p></p>
                    </div>
                </form> 
                
            </div>
        </main>
        
        <script src="jquery.js"></script>
        <script>
            $('form#formulario_transportadora').submit(function(e){
                // previnir que, caso tenha uma action no form ao clicar em submit não
                // seja enviado nada sem entrar nesse código
                e.preventDefault();
                // alert('Teste');
                var form = $(this);
                // alert(form.serialize());
                var retorno = insertForm(form);
            });

            function insertForm (data) {
                $.ajax({
                    // method para inserir
                    type:'POST',
                    // dados para inserir
                    data: data.serialize(),
                    // local para inserir
                    url: 'inserir_transportadora.php',
                    // não vai ser assincrona
                    async: false
                }).then( success, fail);

                function success (data) {
                    //console.log(data);
                    $sucesso = $.parseJSON(data)['sucesso'];
                    $mensagem = $.parseJSON(data)['mensagem'];

                    $('div#mensagem').show(1000);

                    if ( $sucesso ) {
                        $('#mensagem p').html($mensagem);
                        //$('div#mensagem').hide(50000);
                    } else {
                        $('#mensagem p').html($mensagem);
                        //$('div#mensagem').hide(50000);
                    }
                }

                function fail () {
                    console.log('Error AJAX.')
                }
            }
        </script>
    </body>
</html>