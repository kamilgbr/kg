<?php
require 'vendor/autoload.php';

class Main {

   function __construct() {
       
    //$client = new MongoDB\Client;
$this->db = (new MongoDB\Client)->wypozyczalnia->klienci;
   }

 function deleteClient( ) {

        //Jeżli posiadmy dane, wprowadźmy je

      $insertable = $this->db->deleteOne([

        'login'      => $_POST['loginID'],
        ]);
      
        //Zwróć id wprowadzonych danych

        return 0;
    }

}
?>

 <?php

    $db = new Main;

if(isset($_POST['loginID'])) {
    if(!empty($_POST['loginID'])){

    $insertable = $db->deleteClient([
    
        'login'  => $_POST['loginID'], ]);
    }

}

if(isset($_POST['loginID']) &&  ($insertable == $_POST['loginID']))

{

    echo 'Użytkownik usunięty';
}

else {
   echo 'Nie ma takiego użytkownika';
   echo '<button class="button"><a href="delete_user.php">Powrót</a></button>';

}

?> 