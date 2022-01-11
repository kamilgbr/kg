<?php
require 'vendor/autoload.php';

class Main {

   function __construct() {
       
    //$client = new MongoDB\Client;
$this->db = (new MongoDB\Client)->wypozyczalnia->filmy;
   }

 function editMovie() {

        //Jeżli posiadmy dane, wprowadźmy je

      $insertable = $this->db->updateOne(
        ['tytuł' => $_POST['tytul_wID']],
        [ '$set' => 
            [   'reżyser' => $_POST['rezyres_wID'],
                'gatunek' => $_POST['gatunek_wID'],
                'ocena_filmu' => $_POST['ocena_filmu_wID'],
                'czas_trwania' => $_POST['czas_trwania_wID'],
                'streszczenie_fabuły' => $_POST['streszczenie_wID'],
            
            ]
        ]);
      
        //Zwróć id wprowadzonych danych

        return 0;
    }
}

?>

 <?php

    $db = new Main;

if(isset($_POST['tytul_wID'])) {
    if(! empty($_POST['tytul_wID'])){

    $insertable = $db->editMovie(
        ['tytuł' => $_POST['tytul_wID']],
        [ '$set' => 
            [   'reżyser' => $_POST['rezyres_wID'],
                'gatunek' => $_POST['gatunek_wID'],
                'ocena_filmu' => $_POST['ocena_filmu_wID'],
                'czas_trwania' => $_POST['czas_trwania_wID'],
                'streszczenie_fabuły' => $_POST['streszczenie_wID'],
            
            ]
         ]);
    
    if ($insertable) 
        {
            echo "Film usunięty <br>";
            echo '<button><a href="editFilm.php">Powrót</a></button>';
        }   

        else { echo "Film został edytowany <br>";
                echo '<button class="button"><a href="editFilm.php">Powrót</a></button>';}

    }
}
?> 