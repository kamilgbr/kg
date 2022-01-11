<!DOCTYPE html>
<html>
<head>
    <title>Usuń użytkownika</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<h2>Usuwanie użytkownika</h2>
<button class="button"><a href="main.php">Strona Główna</a></button><br><br>

<form method="post" action="delete_user_script.php">

<b>Podaj login użytkownika:</b> <input type="text" name="loginID" id="" required><br>
<input class="button" type="submit" name="submit" id="" value="Usuń">

</form>
</body>
</html>