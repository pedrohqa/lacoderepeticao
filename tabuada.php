<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Document</title>
</head>
<body bgcolor="#A7CFEE">
    <div class="container">
        <?php
            $valor = $_POST['tabuada'];

            echo "<h2> Tabuada do $valor <h2>";

            for($n = 0; $n <= 10; $n++)
            {
            echo "<h7>$valor x $n =<h7>".($valor * $n);
            echo "<br>";
            }

        ?>
        <br>
        <a href="index.html"> <center> Voltar </center></a>
    </div>
</body>
</html>