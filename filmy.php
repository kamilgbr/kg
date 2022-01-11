<!DOCTYPE html>
<html>
<head>
<title>Aplikacja</title>
<link rel="stylesheet" href="styl.css">
</head>
<body>
    
<?php

$db = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$options = ['sort'=> array('ocena_filmu'=>1)];
$filter = [];
$zapytanie = new MongoDB\Driver\Query($filter,$options);
$filmy = $db->executeQuery("wypozyczalnia.filmy", $zapytanie);
$wypozyczenia = $db->executeQuery("wypozyczalnia.wypozyczenia", $zapytanie);

?>

<button class="button"><a href="main.php">Strona Główna</a></button> <br><br>
<br>

<h2>Lista filmów</h2>
<hr>
<?php 

$tablica = array();

foreach($wypozyczenia as $wiersz1)

    {
    
       array_push($tablica, $wiersz1->tytuł);

    }

    
    foreach($filmy as $wiersz)

    {
      
        for($i = 0; $i<count($tablica); $i++)
      {

        if($wiersz->tytuł == $tablica[$i]) {
 
      echo '<div class="movieDisplay"><span style="color:red"><b>Film</b> '.'<b>'.$wiersz->tytuł.'</b>' .' <b>został wypożyczony!</b></span></div> <br>';
     
        }
        
      }

        echo ("
        <b>ID:</b> $wiersz->_id<br>
        <b>Tytuł filmu:</b> $wiersz->tytuł 
        </br><b>Reżyser:</b> $wiersz->reżyser 
        </br><b>Gatunek:</b> $wiersz->gatunek
        </br><b>Ocena filmu:</b> $wiersz->ocena_filmu 
        </br><b>Czas trwania filmu:</b> $wiersz->czas_trwania 
        </br><b>Krótki opis filmu</b>: $wiersz->streszczenie_fabuły </br>");
      

        echo("<br>");
        echo '<hr>';
}

?>
</div>
</body>
</html>