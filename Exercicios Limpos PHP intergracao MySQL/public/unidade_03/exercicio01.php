<?php
    // do this to hide informations of servidor
    require_once("../../conexao/conexao.php");
?>

<?php
    // Fourth - Open consult to DB
    $consulta_categorias1 = "SELECT * FROM categorias"; //code of Query
    $consulta_categorias2 = "SELECT *"; //code of Query
    $consulta_categorias2 .= " FROM categorias";//code of Query with concatenation
    $consulta_categorias2 .= " WHERE categoriaID > 2"; //code of Query with concatenation
    $categorias1 = mysqli_query($conecta, $consulta_categorias1); //API to query
    $categorias2 = mysqli_query($conecta, $consulta_categorias2); //API to query

    $consulta_produtos1 = "SELECT nomeproduto, tempoentrega FROM produtos";
    $produtos1 = mysqli_query($conecta, $consulta_produtos1);
    
    if (!$categorias1) {
        die("Falha na consulta ao banco");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <ul>
        <?php
            /* query with index of column and row
            while ($registro = mysqli_fetch_row($categorias2)) {
                print_r($registro);
                echo "<br>";
            }*/
            /* query with index as name of field
            while ($registro = mysqli_fetch_assoc($categorias1)) {
                print_r($registro);
                echo "<br>";
            }*/
            //echo "<br>"."<br>";
            // Fifth - list of data
            while ($registro = mysqli_fetch_assoc($produtos1)) {
        ?>
            <li><?php echo $registro['nomeproduto'] ?></li>    
        <?php
            // echo "<br>";
            }
        ?>
        </ul>
        <?php
            // Sixth - to leave data of memory
            mysqli_free_result($produtos1); // to delet of the memory of my servidor
        ?>
    </body>
</html>

<?php
    //Second - Close connection
    mysqli_close($conecta);
?>