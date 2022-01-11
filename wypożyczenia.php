<!DOCTYPE html>
<html>
<head>
<title>Aplikacja</title>
<link rel="stylesheet" href="styl.css">
</head>
<body>
<?php

$db = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$zapytanie = new MongoDB\Driver\Query([]);
$wypozyczenia = $db->executeQuery("wypozyczalnia.wypozyczenia", $zapytanie);

?>

<div>
<button class="button"><a href="main.php">Strona Główna</a></button> <br><br>


<div>
    <h2>Aktywne wypożyczenia</h2>
    <?php foreach ($wypozyczenia as $wiersz2)
    {
        echo ("<b>ID Klienta:</b> $wiersz2->id_klienta </br><b>Tytuł:</b> $wiersz2->tytuł  </br><b>Data i godzina wypożyczenia:</b> $wiersz2->data_i_godzina_wypozyczenia </br><b>Data i godzina planowanego zwrotu</b>: $wiersz2->data_i_godzina__planowanego_zwr </br><b>Data i godzina faktycznego zwrotu:</b> $wiersz2->data_i_godzina__zwr</br></br>");
    }
    ?>
</div>
</body>
</html>