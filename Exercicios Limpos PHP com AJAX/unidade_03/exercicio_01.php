<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <!-- <div id="curso"></div> -->
        <div class="curso"></div>
        <div class="curso"></div>
        <div class="curso"></div>

        <!-- chamada da library JQuery -->
        <script src="jquery.js"></script>
        <script>
            $('#curso').load('dados.txt');
            // para acionar todos as tag dic com class curso
            //$('div.curso').load('dados.txt');
            // quando quero pegar a primeira ocorrencia da div class="curso"
            $('div.curso:first').load('dados.txt');

        </script>
    </body>
</html>