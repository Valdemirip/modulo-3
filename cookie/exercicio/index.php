<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <form method = "post" action = "login.php">
    <label for = "username">Username:</label>
    <input type= "text" name = "usuario"> <br/></label>
    <br/>
    <label for = "password">Senha:</label>
    <input type= "password" name = "Senha"> <br/></label>
    <br/>
    <label for = "lembrar">Tema Preferido:</label>
    
    <select name ="tema">
        <option value = "escuro">Escuro</option>
        
        <option value = "claro">Claro</option>
    </select>
    <br/>

    <input type= "submit" value = "Login">
    </form>

</body>
</html>