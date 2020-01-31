<?php
    //First -  Open connection
    /* mysqli_connect("name of servidor of DB",
                      "name of user of DB",
                      "password",
                      "name of DB") */
    // $conecta =  mysqli_connect("localhost","root","root","andes");
    $servidor       = "localhost"; // if erro 2002
    $user           = "root"; // if erro 1044
    $password       = ""; // if erro 1045
    $databaseName   = "andes"; // if erro 1049
    $conecta        =  mysqli_connect($servidor,$user,$password,$databaseName);

    //Third - Test connection
    if (mysqli_connect_errno()) {        
        // put here the routine for try catch erro connection
        die("Conexão falhou: " . mysqli_connect_errno());
    }
?>

