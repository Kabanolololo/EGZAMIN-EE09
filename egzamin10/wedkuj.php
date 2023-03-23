<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <title>
            Wędkujemy
        </title>
        <link rel="stylesheet" href="styl_1.css">
    </head>
    <body>
        <div id="baner">
            <h1>
                Portal dla wędkarzy
            </h1>
        </div>
        <div id="lewy">
            <h2>
                Ryby drapieżne naszych wód
            </h2>
            <ul>
<?php
$polaczenie=mysqli_connect('localhost','root','','wedkowanie');
mysqli_select_db($polaczenie,'wedkowanie');

$wynik=mysqli_query($polaczenie,'select nazwa, wystepowanie from ryby WHERE styl_zycia="1"');
while($zapytanie=mysqli_fetch_array($wynik)){
echo '<li>'.$zapytanie['nazwa'].' występowanie: '.$zapytanie['wystepowanie'].'</li>';
}
?>
            </ul>
        </div>
        <div id="prawy">
            <img src="ryba1.jpg" alt="sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
        <div id="stopka">
            <p>
                Strone wykonał: Paweł Muszyński
            </p>
        </div>
    </body>
</html>