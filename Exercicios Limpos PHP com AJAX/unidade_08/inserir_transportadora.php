  <?php
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = utf8_decode($_POST["nometransportadora"]);
        $endereco   = utf8_decode($_POST["endereco"]);
        $cidade     = utf8_decode($_POST["cidade"]);
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";   

        $retorno = array();
        
        // conferindo a inserção
        $operacao_insercao = mysqli_query($conecta, $inserir);
        if ( $operacao_insercao ) {
            //echo 'Ok.';
            $retorno['sucesso'] = true;
            $retorno['mensagem'] = 'Transportadora inserida com sucesso.';
        } else {
            //echo 'Falha.';
            $retorno['sucesso'] = false;
            $retorno['mensagem'] = 'Falha ao inserir dados da transportadora';
        }

        echo json_encode($retorno);
    }
?>