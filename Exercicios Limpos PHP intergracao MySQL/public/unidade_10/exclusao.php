<?php require_once("../../conexao/conexao.php"); ?>

<?php 
    // confirmar se a page foi chamada a partir do page of form
    if ( isset($_POST["nometransportadora"]) ) {
        $tID = $_POST["transportadoraID"];
        
            $exclusao = "DELETE FROM transportadoras ";
            $exclusao .= "WHERE transportadoraID = {$tID} ";
            $con_exclusao = mysqli_query($conecta, $exclusao);
            if (!$con_exclusao) {
                die("Oooops! Registro não foi excluído.");
            } else {
                header("location:listagem.php");
            }
    }

    // consulta a table of tranportadoras
    $tr = "SELECT * FROM transportadoras ";
    if ( isset($_GET["codigo"]) ) {
        $id = $_GET["codigo"];
        $tr .= "WHERE transportadoraID = {$id} ";
    }

    $conect_transportadora = mysqli_query($conecta, $tr);
    if (!$conect_transportadora) {
        die("ERROR on serch in the DB!");
    }
    
    $info_transportadora = mysqli_fetch_assoc($conect_transportadora);
    //print_r($info_transportadora);
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
                <form action="exclusao.php" method="post">
                    <h2>Exclusão de Transportadoras</h2>
                    
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["nometransportadora"])  ?>" name="nometransportadora" id="nometransportadora">

                    <label for="endereco">Endereço</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["endereco"])  ?>" name="endereco" id="endereco">
                    
                    <label for="cidade">Cidade</label>
                    <input type="text" value="<?php echo utf8_encode($info_transportadora["cidade"])  ?>" name="cidade" id="cidade">
                    <input type="hidden" name="transportadoraID" value="<?php echo $info_transportadora["transportadoraID"] ?>">
                    <input type="submit" value="Confirmar exclusão">                    
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