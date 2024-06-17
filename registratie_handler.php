<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bevestiging</title>
</head>
<body>
    <h2>Forum registratie</h2>
    <?php
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        
        echo "<p><strong>Jouw Username is</strong> $username</p>";
        echo "<p><strong>Jouw e-mail is</strong> $email</p>";
        echo "<p><strong>Jouw age is</strong> $age</p>";
    ?>
</body>
</html>
