<?php require_once("../../conexao/conexao.php"); ?>

<?php 
    
    if ( isset($_POST["nometransportadora"]) ) {
        
        $nometransportadora = utf8_decode($_POST["nometransportadora"]);
        $endereco = utf8_decode($_POST["endereco"]);
        $cidade = utf8_decode($_POST["cidade"]);
        $estado = $_POST["estados"];
        $cep = $_POST["cep"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];
        $tID = $_POST["transpotadoraID"];
        
        //objeto to update
        
        $alterar = "UPDATE transportadoras ";
        $alterar .= "SET ";
        $alterar .= "nometransportadora = '{$nometransportadora}', ";
        $alterar .= "endereco = '{$endereco}', ";
        $alterar .= "cidade = '{$cidade}', ";
        $alterar .= "estadoID = '{$estado}', ";
        $alterar .= "cep = '{$cep}', ";
        $alterar .= "cnpj = '{$cnpj}', ";
        $alterar .= "telefone = '{$telefone}' ";
        $alterar .= "WHERE transportadoraID = {$tID} ;";
        
        // run query
        $operacao_alterar = mysqli_query($conecta, $alterar);    
        
        if (!$operacao_alterar) {
            die("Erro na alteração");
        } else {
            header("location:listagem.php");
        }
        
    }
        
    // Consulta no BD
    $transportadora  = "SELECT * ";
    $transportadora .= "FROM transportadoras ";

    if (isset($_GET["codigo"])) {
        $id = $_GET["codigo"];
        $transportadora .= "WHERE transportadoraID = {$id} ";
    } else {
        $transportadora .= "WHERE transportadoraID = 5 ";
    }

    $con_tranportadora = mysqli_query($conecta, $transportadora);

    if (!$con_tranportadora) {
        die("ERROR in DB.");
    }

    $info_transportadora = mysqli_fetch_assoc($con_tranportadora);

    // consulta aos estados
    $estados = "SELECT * ";
    $estados .= "FROM estados "; 
    $lista_estados = mysqli_query($conecta, $estados);

    if (!$lista_estados) {
        die("ERROR in DB.");    
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="janela_formulario">
                <form action="alteracao.php" method="post">
                    <h2>Alteração de transportadoras</h2>
                    <label for="nometransportadora">Nome da tranpostadora</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["nometransportadora"]) ?>" name="nometransportadora" id="nometransportadora">
                    <label for="endereco">Endereço</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["endereco"]) ?>" name="endereco" id="endereco">
                    <label for="cidade">Cidade</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["cidade"]) ?>" name="cidade" id="cidade">
                    <label for="estados">Estados</label>
                    <select id="estados" name="estados">
                        <?php 
                           $meu_estado = $info_transportadora["estadoID"];
                           while ($linha = mysqli_fetch_assoc($lista_estados)) {
                               $estado_principal = $linha["estadoID"];
                               if ($meu_estado == $estado_principal) {
                        ?>
                            <option value="<?php echo $linha["estadoID"]; ?>" selected>
                                <?php 
                                    echo utf8_encode($linha["nome"]);
                                ?>
                            </option>
                            <?php
                               } else {
                            ?>
                            <option value="<?php echo $linha["estadoID"]; ?>">
                                <?php 
                                    echo utf8_encode($linha["nome"]);
                                ?>
                            </option>
                        <?php
                               }
                           }
                        ?>
                    </select>
                    <label for="cep">CEP</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["cep"]) ?>" name="cep" id="cep">
                    <label for="telefone">Telefone</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["telefone"]) ?>" name="telefone" id="telefone">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["cnpj"]) ?>" name="cnpj" id="cnpj">
                    
                    
                    <input type="hidden" name="transpotadoraID" value="<?php echo $info_transportadora["transportadoraID"] ?>">
                    
                    <input type="submit" value="Confirmar">
                    
                </form>
            </div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>