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

<h2>Edytuj Film</h2>
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

        echo (
          
          "<form method='post' action='edit_movie_script.php'>
          <b>ID:</b> $wiersz->_id <br>
          
          <b>Tytuł filmu:</b> $wiersz->tytuł <br>
        <input type='text'  value='$wiersz->tytuł'   name='tytul_wID' id='' ><br>

        </br><b>Reżyser:</b> $wiersz->reżyser <br>
        <input type='text'  value='$wiersz->reżyser'   name='rezyres_wID' id='' ><br>

        </br><b>Gatunek:</b> $wiersz->gatunek<br>
        <input type='text' value='$wiersz->gatunek'    name='gatunek_wID' id='' ><br>

        </br><b>Ocena filmu:</b> $wiersz->ocena_filmu <br>
        <input type='text' value='$wiersz->ocena_filmu'    name='ocena_filmu_wID' id='' ><br>

        </br><b>Czas trwania filmu:</b> $wiersz->czas_trwania <br>
        <input type='text'   value='$wiersz->czas_trwania'   name='czas_trwania_wID' id='' <br>

        </br><b>Krótki opis filmu</b>: $wiersz->streszczenie_fabuły </br>
        <input type='text'   value='$wiersz->streszczenie_fabuły'    name='streszczenie_wID' id='' ><br>

        <button class='button'>Edytuj</button><br>
        
        </form>"
      );

      

        echo("<br>");
        echo '<hr>';
}

?>
</div>
</body>
</html>