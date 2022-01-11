<?php
require 'vendor/autoload.php';

class Main {

   function __construct() {
       
    //$client = new MongoDB\Client;
$this->db = (new MongoDB\Client)->wypozyczalnia->klienci;
   }

 function insertNewClient( $itemInfo = [] ) {

    if ( empty( $itemInfo ))

        {
            return false;
        }

        //Jeżli posiadmy dane, wprowadźmy je

      $insertable = $this->db->insertOne([

        'login'      => $_POST['loginID'],
        'hasło'      => $_POST['hasłoID'],
        'email'      => $_POST['emailID'],
        'imię'      => $_POST['imieID'],
        'nazwisko'  => $_POST['nazwiskoID'],
        'adres'     => $_POST['adresID'],
        'miasto'      => $_POST['miastoID'],
        'telefon'   => $_POST['telefonID']

        ]);
      
        //Zwróć id wprowadzonych danych

        return $insertable->getInsertedId();
    }

}
?>

 <?php

    $db = new Main;

if(isset($_POST['imieID'])) {
    if(! empty($_POST['imieID'])){

    $insertable = $db->insertNewClient([
    
        'login'      => $_POST['loginID'],
        'hasło'      => $_POST['hasłoID'],
        'email'      => $_POST['emailID'],
        'imię'      => $_POST['imieID'],
        'nazwisko'  => $_POST['nazwiskoID'],
        'adres'     => $_POST['adresID'],
        'miasto'      => $_POST['miastoID'],
        'telefon'   => $_POST['telefonID']
    
    ]);
    
    if ($insertable) 
        {
            echo "Użytkownik dodany do bazy <br>";
            echo '<button class="button"><a href="add_user.php">Powrót</a></button>';
        }   

        else { echo "Użytkownik dodany do bazy <br>";
                echo '<button class="button"><a href="add_user.php">Powrót</a></button>';}

    }
}


?> 