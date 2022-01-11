<?php
require 'vendor/autoload.php';

class Main {

   function __construct() {
       
    //$client = new MongoDB\Client;
$this->db = (new MongoDB\Client)->wypozyczalnia->filmy;
   }

 function deleteClient( ) {

        //Jeżli posiadmy dane, wprowadźmy je

      $insertable = $this->db->deleteOne([

        'tytuł'      => $_POST['tytułID'],
        ]);
      
        //Zwróć id wprowadzonych danych

        return 0;
    }
}

?>

 <?php

    $db = new Main;

if(isset($_POST['tytułID'])) {
    if(! empty($_POST['tytułID'])){

    $insertable = $db->deleteClient([
    
        'tytuł'      => $_POST['tytułID'],

    
    ]);
    
    if ($insertable) 
        {
            echo "Film usunięty <br>";
            echo '<button class="button"><a href="delete_user.php">Powrót</a></button>';
        }   

        else { echo "Dane nie mogą być puste! <br>";
                echo '<button class="button"><a href="delete_user.php">Powrót</a></button>';}

    }
}
?> 