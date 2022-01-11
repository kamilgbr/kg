
<!DOCTYPE html>
<html>
<head>
    <title>Dodawanie użytkownika</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<h2>Dodawanie użytkownika</h2>
<button class="button"><a href="main.php">Strona Główna</a></button><br><br>

<form method="post" action="add_user_script.php">

<b>Login:  </b>    <input type="text"     name="loginID"    id="" required><br>
<b>Hasło:  </b>    <input type="password" name="hasłoID"    id="" required><br>
<b>E-Mail: </b>    <input type="text"     name="emailID"    id=""                 placeholder="nazwa@gmail.com" required><br>
<b>Imię:   </b>    <input type="text"     name="imieID"     id="" required><br>
<b>Nazwisko:  </b> <input type="text"     name="nazwiskoID" id="" required><br>
<b>Adres:   </b>   <input type="text"     name="adresID"    id=""                 placeholder="ulica_numer domu" required><br>
<b>Miasto:</b>     <input type="text"     name="miastoID"   id=""  required><br>
<b>Telefon:</b>    <input type="text"     name="telefonID"  id=""                 placeholder="123-456-786" required><br>
            <input class="button" type="submit"   name="submit"     id="" value="Dodaj">
            <input class="button" type="reset"    id="" value="Wyczyść">

</form>

</body>
</html>