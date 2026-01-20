<?php

if (!empty($_POST['login'] && !empty($_POST['password']))) {

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);



if ($login == "admin" && $password == "admin") {
    $mensagem =  "Login realizado com sucesso!";
} else {
    $mensagem = "Falha no Login!";
}

} else {
    $mensagem =  "Por favor, preencha todos os campos!";
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "dados.php" method="POST">
        
        <input type = "text" name = "login"  placeholder = "Digite o Login" value = "<?= $login ?? '' ?>"/>

        <input type = "password" name="password" placeholder = "Digite a senha" value = "<?= $password ?? '' ?>"/>

        <input type = "submit" value="enviar"/>

    </form>



     <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   echo $mensagem;
   }
   ?>

</body>
</html>