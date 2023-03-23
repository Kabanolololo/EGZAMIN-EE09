<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="png/jpg" href="zad1/obraz.jpg">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Forum o psach</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styl4.css'>
</head>
<body>
    <div id="baner">
        <h1>
            Forum wielbicieli psów
        </h1>
    </div>
    <div id="blokl">
        <img src="zad1/obraz.jpg" alt="foksterier">
    </div>
    <div id="prawy1">
        <h2>
            Zapisz się
        </h2>
        <form method="post" action="logowanie.php">
        login: <input type="text" name="login"><br>
        hasło: <input type="password" name="haslo1"><br>
        powtórz hasło <input type="password" name="haslo2"><br>
        <input type="submit" value="Zapisz">
        </form>
<?php
$conn=mysqli_connect('localhost','root','','psy');

$l=$_POST['login'];
$h1=$_POST['haslo1'];
$h2=$_POST['haslo2'];

$zapytanie=mysqli_query($conn,'select login from uzytkownicy;');
while($w=mysqli_fetch_array($zapytanie)){
    $sprawdz=$w['login'];
}

if(empty($l) || empty($h1) || empty($h2)){
    echo "<p> Wypełnij wszystkie pola </p>";
}
else if ($h1!==$h2){
    echo "<p> Hasła nie są takie same </p>";
}
else if($sprawdz==$l){
    echo "<p> Isnienje takie konto </p>";
}
else{
    $haslo1=($h1);
    $insert="INSERT INTO `uzytkownicy`(`login`, `haslo`) VALUES ('$l','$haslo1')";
    mysqli_query($conn,$insert);
}
mysqli_close($conn);
?>
    </div>
    <div id="prawy2">
        <h2>
            Zapraszamy wszystkich
        </h2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </div>
    <div id="stopka">
        Stronę wykonał: 000
    </div>
</body>
</html>