<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
        //echo "Informação do host: " . $_SERVER['HTTP_HOST'] . "<br>";
        //echo "Informações do navegador/ SO: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
        //echo "Nome do arquivo: " . $_SERVER['SCRIPT_NAME'];
        echo"<hr>";
        echo '<hr>= $_SERVER<hr>';
        foreach ($_SERVER as $key => $value) {
            echo $key . ": " . $value . "<br><br>";
        }
        echo"<hr>";
        ?>
    </body>
</html>
  

  <!DOCTYPE html>
<html>
    <head>
        <title>Ex Form</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="get" action="form_resp.php">
            <label for="txt_nome">Nome:</label>
                <input type="text" name="txt_nome" id="txt_nome"><br>
            <label for="txt_email">E-mail:</label>
                <input type="text" name="txt_email" id="txt_email"><br>
                <input type="submit" />

        </form>
    </body>
</html>

======================== BACKEND =========================

<?php

echo "DADOS ENVIADOS PELO FORMULÁRIO<BR>";

echo "Nome..: " . $_POST["txt_nome"] . "<br>";
echo "E-Mail: " . $_POST["txt_email"] . "<br>";
echo "Fone..: " . $_POST["txt_fone"] . "<br>";
//print_r($_GET);