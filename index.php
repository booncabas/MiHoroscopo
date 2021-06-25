<!DOCTYPE html>
<?php
include 'Convertir.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color:#EAEAEA;">
        <h1 style="color: #2525FF">
            CONSULTE SU SIGNO ZODIACAL
        </h1>
        <h3>
            Ingrese la fecha(dd/mm)
        </h3>
        <form action="index.php" method="post">
            <input type="text" name="texto">
            <input type="submit">
        </form>
        <div id="mostrar">
            <?php 
                if (isset($_POST['texto'])) {
                    echo $_POST['texto'];
                    echo '<br>';
                    $resp = convertir($_POST['texto']);
                    echo $resp;
                    echo '<br>';
                    echo '<img src="img/'.$resp.'.jpg" width=200mpx height="200mpx" alt="Error No hay imagen"/>';
                    
                }

            ?>
        </div>
    </body>
</html>
