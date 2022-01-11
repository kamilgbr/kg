<!DOCTYPE html>
<html>
<head>
    <title>Usuń film</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<h2>Usuwanie filmu</h2>
<button class="button"><a href="main.php">Strona Główna</a></button><br><br>

<form method="post" action="delete_movie_script.php">

<b>Podaj tytuł filmu: </b> <input type="text" name="tytułID" id="" required><br>
<input class="button" type="submit" name="submit" id="" value="Usuń">

</form>
</body>
</html>