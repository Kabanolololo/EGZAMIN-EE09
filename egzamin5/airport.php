<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>
            Odloty samolotów
        </title>
        <link rel="stylesheet" href="styl6.css" />
    </head>

    <body>
        <header>
            <div id="baner1">
                <h2>
                    Odloty z lotniska
                </h2>
            </div>
            <div id="baner2">
                <img src="zad6.png" alt="logotyp">
            </div>
            <div style="clear: both;"></div>
        </header>
        <div id="glowny">
            <h4>
                Tabela odlotów
            </h4>
            <table>
                <tr>
                    <th>lp.</th>
                    <th>numer rejsu</th>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>status</th>
                </tr>
<?php
$polaczenie=mysqli_connect('localhost','root','','egzaminsamolot');
mysqli_select_db($polaczenie,'egzaminsamolot');

$zapytanie=mysqli_query($polaczenie,'SELECT id,nr_rejsu,czas,kierunek,status_lotu from odloty order by czas desc;');
while($wynik=mysqli_fetch_array($zapytanie)){
    echo "<tr>";
    echo "<td>".$wynik['id']."</td>";
    echo "<td>".$wynik['nr_rejsu']."</td>";
    echo "<td>".$wynik['czas']."</td>";
    echo "<td>".$wynik['kierunek']."</td>";
    echo "<td>".$wynik['status_lotu']."</td>";
    echo "</tr>";
}

mysqli_close($polaczenie);
?>
            </table>
        </div>
        <footer>
            <div class="stopka">
                <a href="kwerendy.txt" target="_blank">Pobierz obraz</a>
            </div>
            <div id="stopka2">
<?php
setcookie('ciastko',1,time()+3600);
if(!isset($_COOKIE['ciastko'])){
    echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
}
else{
    echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
}
?>
            </div>
            <div class="stopka">
                Autor: Paweł Muszyński
            </div>
            <div style="clear: both;"></div>
        </footer>
    </body>
</html>