<?php

if (!empty($_POST['login'] && !empty($_POST['password']))) {

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$mensagem = null;

if ($login == "admin" && $password == "12345") {
    $mensagem =  "Login realizado com sucesso!";
} else {
    $mensagem = "Login ou senha incorretos!";
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
        <input type = "text" name="login" placeholder = "Digite o Login">
        <br>
        <br>
        <input type = "password" name="password" placeholder = "Digite a senha">
        
        <input type = "submit" value="enviar">
    </form>
<?php
    echo $mensagem
?>

</body>
</html>