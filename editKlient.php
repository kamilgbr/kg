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
$klienci = $db->executeQuery("wypozyczalnia.klienci", $zapytanie);

?>

<button class="button"><a href="main.php">Strona Główna</a></button> <br><br>
<br>

<h2>Edytuj Klienta</h2>
<hr>
<?php 

    foreach($klienci as $wiersz)

    {
      
  
        echo (
          
          "<form method='post' action='edit_klient_script.php'>
          <b>ID:</b> $wiersz->_id <br>
          
          <b>Login: </b> $wiersz->login <br>
        <input type='text'  value='$wiersz->login'   name='login_wID' id='' ><br>

        </br><b>Hasło: </b> $wiersz->hasło <br>
        <input type='password'  value='$wiersz->hasło'   name='hasło_wID' id='' ><br>

        </br><b>E-mail: </b> $wiersz->email<br>
        <input type='text' value='$wiersz->email'    name='email_wID' id='' ><br>

        </br><b>Imię: </b> $wiersz->imię <br>
        <input type='text' value='$wiersz->imię'    name='imię_wID' id='' ><br>

        </br><b>Nazwisko: </b> $wiersz->nazwisko <br>
        <input type='text'   value='$wiersz->nazwisko'   name='nazwisko_wID' id=''> <br>

        </br><b>Adres: </b>: $wiersz->adres </br>
        <input type='text'   value='$wiersz->adres'    name='adres_wID' id='' ><br>

        </br><b>Miasto: </b>: $wiersz->miasto </br>
        <input type='text'   value='$wiersz->miasto'    name='miasto_wID' id='' ><br>

        </br><b>Telefon: </b>: $wiersz->telefon </br>
        <input type='text'   value='$wiersz->telefon'    name='telefon_wID' id='' ><br>

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