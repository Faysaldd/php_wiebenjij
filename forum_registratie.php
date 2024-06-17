<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum registratie</title>
</head>
<body>
    <h2>Forum registratie</h2>
    <form action="registratie_handler.php" method="POST">
        <label for="username">Gebruikersnaam:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="age">Leeftijd:</label><br>
        <input type="number" id="age" name="age" required><br><br>
        

        <input type="submit" value="Verzenden">
    </form>
</body>
</html>