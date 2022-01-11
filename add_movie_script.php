
<?php
require 'vendor/autoload.php';

class Main {

   function __construct() {
       
    //$client = new MongoDB\Client;
$this->db = (new MongoDB\Client)->wypozyczalnia->filmy;
   }

 function insertNewClient() {

        //Jeżli posiadmy dane, wprowadźmy je

     try { $insertable = $this->db->insertOne([

        'tytuł'                   => $_POST['tytułID'],
        'reżyser'                 => $_POST['reżyserID'],
        'gatunek'                 => $_POST['gatunekID'],
        'ocena_filmu'             => $_POST['ocenaID'],
        'czas_trwania'            => $_POST['czasID'],
        'streszczenie_fabuły'     => $_POST['streszczenieID']

        ]);

        echo 'Film dodany poprawnie.';
        echo '<button class="button"><a href="add_movie.php">Powrót</a></button>';
    }
    catch (Exception $e ) {

        echo 'Nie można dodać filmu o tym samym tytule.';
        echo '<button class="button"><a href="add_movie.php">Powrót</a></button>';
    }
        //Zwróć id wprowadzonych danych

        return 0;
    }

}
?>

 <?php

    $db = new Main;

if(isset($_POST['tytułID'])) {
    if(! empty($_POST['tytułID'])){

    $insertable = $db->insertNewClient([
    
 
        'tytuł'                   => $_POST['tytułID'],
        'reżyser'                 => $_POST['reżyserID'],
        'gatunek'                 => $_POST['gatunekID'],
        'ocena_filmu'             => $_POST['ocenaID'],
        'czas_trwania'            => $_POST['czasID'],
        'streszczenie_fabuły'     => $_POST['streszczenieID']
    
    ]);
    

}

}

?> 