<?php require_once("../../conexao/conexao.php"); ?>

<?php 
    // Consulta no BD
    $transportadora  = "SELECT * ";
    $transportadora .= "FROM transportadoras ";

    if (isset($_GET["codigo"])) {
        $id = $_GET["codigo"];
        $transportadora .= "WHERE transportadoraID = {$id} ";
    } else {
        $transportadora .= "WHERE transportadoraID = 1 ";
    }

    $con_tranportadora = mysqli_query($conecta, $transportadora);

    if (!$con_tranportadora) {
        die("ERROR in DB.");
    }

    $info_transportadora = mysqli_fetch_assoc($con_tranportadora);

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
                    </select>
                    <label for="cep">CEP</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["cep"]) ?>" name="cep" id="cep">
                    <label for="telefone">Telefone</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["telefone"]) ?>" name="telefone" id="telefone">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["cnpj"]) ?>" name="cnpj" id="cnpj">
                    
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