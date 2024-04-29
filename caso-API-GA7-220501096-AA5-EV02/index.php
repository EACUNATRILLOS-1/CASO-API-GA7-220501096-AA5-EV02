<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Register Form - CodeCraftedWeb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="main">      
            <input type="checkbox" id="chk" aria-hidden="true">
    
            <div class="login">
                <form class="form" action="login.php" method="post"> <!-- Agregado action y method -->
                    <label for="chk" aria-hidden="true">Login</label>
                    <input class="input" type="email" name="email" placeholder="Email" required>
                    <input class="input" type="password" name="password" placeholder="Password" required> <!-- Corregido el nombre del campo -->
                    <button type="submit">Login</button> <!-- Cambiado el tipo de botón a submit -->
                </form>
            </div>
    
            <div class="register">
                <form class="form" action="registro.php" method="post"> <!-- Agregado action y method -->
                    <label for="chk" aria-hidden="true">Register</label>
                    <input class="input" type="text" name="username" placeholder="Username" required> <!-- Corregido el nombre del campo -->
                    <input class="input" type="email" name="email" placeholder="Email" required>
                    <input class="input" type="password" name="password" placeholder="Password" required> <!-- Corregido el nombre del campo -->
                    <button type="submit">Register</button> <!-- Cambiado el tipo de botón a submit -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>




