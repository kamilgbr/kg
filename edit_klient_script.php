<?php
require 'vendor/autoload.php';

class Main {

   function __construct() {
       
    //$client = new MongoDB\Client;
$this->db = (new MongoDB\Client)->wypozyczalnia->klienci;
   }

 function editClient() {

        //Jeżli posiadmy dane, wprowadźmy je

      $insertable = $this->db->updateOne(
        ['login' => $_POST['login_wID']],
        [ '$set' => 
            [   'hasło' => $_POST['hasło_wID'],
                'email' => $_POST['email_wID'],
                'imię' => $_POST['imię_wID'],
                'nazwisko' => $_POST['nazwisko_wID'],
                'adres' => $_POST['adres_wID'],
                'miasto' => $_POST['miasto_wID'],
                'telefon' => $_POST['telefon_wID'],
            
            ]
        ]);
      
        //Zwróć id wprowadzonych danych

        return 0;
    }
}

?>

 <?php

    $db = new Main;

if(isset($_POST['login_wID'])) {
    if(! empty($_POST['login_wID'])){

    $insertable = $db->editClient(
        ['login' => $_POST['login_wID']],
        [ '$set' => 
            [   'hasło' => $_POST['hasło_wID'],
                'email' => $_POST['email_wID'],
                'imię' => $_POST['imię_wID'],
                'nazwisko' => $_POST['nazwisko_wID'],
                'adres' => $_POST['adres_wID'],
                'miasto' => $_POST['miasto_wID'],
                'telefon' => $_POST['telefon_wID'],
            
            ]
        ]);
    
    if ($insertable) 
        {
            echo " <br>";
            echo '<button><a href="editKlient.php">Powrót</a></button>';
        }   

        else { echo "Klient został edytowany. <br>";
                echo '<button class="button"><a href="editKlient.php">Powrót</a></button>';}

    }
}
?> 