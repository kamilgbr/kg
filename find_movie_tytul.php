<?php
require 'vendor/autoload.php';

class Main {

   function __construct() {
       
    //$client = new MongoDB\Client;
$this->db = (new MongoDB\Client)->wypozyczalnia->filmy;
   }

 function showMovie() {

        //Jeżli posiadmy dane, wprowadźmy je

      $insertable = $this->db->find([

        'tytuł'  => $_POST['tytułID'],
    

        ]);
      
        //Zwróć id wprowadzonych danych

        return $insertable->getInsertedId();
    }

}
?>

 <?php

    $db = new Main;

if(isset($_POST['tytułID'])) {
    if(! empty($_POST['tytułID'])){

    $insertable = $db->showMovie([
    
        'tytuł'                   => $_POST['tytułID'],
        'reżyser'                 => $_POST['reżyserID'],
        'imie_i_nazwisko_aktorów' => $_POST['gatunekID'],
        'ocena_filmu'             => $_POST['aktorID'],
        'czas_trwania'            => $_POST['ocenaID'],
        'data_dodania'            => $_POST['czasID'],
        'streszczenie_fabuły'     => $_POST['streszczenieID']
    
    ]);
    
    if ($insertable) 
        {
            echo "Filmy dodany do bazy <br>";
            echo '<button><a href="add_movie.php">Powrót</a></button>';
        }   

        else { echo "Dane nie mogą być puste! <br>";
                echo '<button><a href="add_movie.php">Powrót</a></button>';}

    }
}


?> 