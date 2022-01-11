
<!DOCTYPE html>
<html>
<head>
    <title>Dodawanie filmu</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<h2>Dodawanie nowego filmu</h2>
<button class="button"><a href="main.php">Strona Główna</a></button><br><br>

<form method="post" action="add_movie_script.php">

<b>Tytuł:    </b>         <input type="text" name="tytułID" id="" required> <br>
<b>Reżyser:    </b>         <input type="text" name="reżyserID" id="" required><br>
<b>Gatunek:    </b>         <input type="text" name="gatunekID" id=""  required><br>
<b>Ocena Filmu:  </b>       <input type="text" name="ocenaID" id=""  required><br>
<b>Czas Trwania: </b>       <input type="text" name="czasID" id="" required><br>
<b>Streszczenie fabuły:</b> <input type="text" name="streszczenieID" id="" required><br>
                     <input class="button" type="submit" name="submit" id="" value="Dodaj">
                     <button class="button" type="reset">Wyczyść formularz</button>

</form>
</body>
</html>