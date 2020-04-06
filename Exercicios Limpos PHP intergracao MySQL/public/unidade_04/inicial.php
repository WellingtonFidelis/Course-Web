<?php require_once("../../conexao/conexao.php"); 
//catch the connection of other folder
?>

<?php
    // set locale from Brazil.
    setlocale(LC_ALL, 'pt_BR');
    // consult into DB
    $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena ";
    $produtos .= "FROM produtos";
    $resultado = mysqli_query($conecta, $produtos);
    if (!$resultado) { die("Falha na consulta");}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
    </head>
    
    <body>
        <?php
            // catch the header of another folder only one time
            include_once("_incluir/header.php");
        ?>
        <main>
            <div id="listagem_produtos">
                <?php // estructure for while
                    while($linha = mysqli_fetch_assoc($resultado)) {
                ?>
                <ul>
                    <li class="imagem"><img src="<?php echo $linha["imagempequena"] ?>"></li> <!-- To catch imagem form DB-->
                    <li><h3><?php echo $linha["nomeproduto"] ?></h3></li>
                    <li>Tempo de  entrega: <?php echo $linha["tempoentrega"] ?></li>
                    <li>Pre&ccedil;o Unit&aacute;rio: <?php echo $linha["precounitario"]?></li>
                </ul>
                <?php
                    } // end while
                ?>
            </div>
        </main>
        <?php
            // catch the footer of another folder only one time
            include_once("_incluir/footer.php");
        ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>