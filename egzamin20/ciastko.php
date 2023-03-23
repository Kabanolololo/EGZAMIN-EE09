<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Zespoły ratownicze</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styl3.css'>
</head>
<body>
    <div id="banerl">
        <h2>
            Dodanie zespołu ratowniczego
        </h2>
    </div>
    <div id="baners">
        <p>
            Kontakt:<br>
            022 222 11 33
        </p>
    </div>
    <div id="banerp">
        <img src="obraz.jpg" alt="ratownicy">
    </div>
    <div id="glowny">
        <h3>
            Dodaj nowy zespół
        </h3>
        <form method="post" action="dodanie.php">
            Numer karetki:<br>
            <input type="number" name="numer"><br>
            Imię i nazwisko pierwszego ratownika:<br>
            <input type="text" name="jeden"><br>
            Imię i drugiego pierwszego ratownika:<br>
            <input type="text" name="dwa"><br>
            Imię i trzeciego pierwszego ratownika:<br>
            <input type="text" name="trzy"><br>
            <input type="reset" value="czyść">
            <input type="submit" value="dodaj">
        </form>
    </div>
    <div id="stopkal">
        <a href="kwerendy.txt">Zobacz kweredny</a>
    </div>
    <div id="stopkas">
        <h5>
            Przypominamy numery alarmowe
        </h5>
        <ol>
            <li>112</li>
            <li>999</li>
        </ol>
    </div>
    <div id="stopkap">
        <p>
            Autor<br>
            0000
        </p>
    </div>
<?php
setcookie('witaj',1,time()+3600);
if (!isset($_COOKIE['witaj'])){
    echo "<p> Witaj po raz pierwszy <p>";
}
else{
    echo "<p> Siemanko, cześć<p>";
}
?>
</body>
</html>