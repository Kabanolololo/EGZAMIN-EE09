<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>
            Port Lotniczy
        </title>
        <link rel="stylesheet" href="styl5.css" />
    </head>
    <body>
        <header>
            <div class="baner">
                <img src="zad5.png" alt="logo lotnisko" />
            </div>
            <div id="baner">
                <h1>
                    Przyloty
                </h1>
            </div>
            <div class="baner">
                <h3>
                    przydatne linki
                </h3>
                <a href="kwerendy.txt" target="_blank">Pobierz</a>
            </div>
            <div style="clear: both;"></div>
        </header>

        <div id="glowny">
            <table>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
<?php
    $polaczenie=mysqli_connect('localhost','root','','egzaminsamolot');
    mysqli_select_db($polaczenie,'egzaminsamolot');

    $zapytanie1=mysqli_query($polaczenie,'select czas,kierunek,nr_rejsu,status_lotu from przyloty order by czas');
    while($wynik1=mysqli_fetch_array($zapytanie1)){
        $czas=$wynik1['czas'];
        $kierunek=$wynik1['kierunek'];
        $nr=$wynik1['nr_rejsu'];
        $status=$wynik1['status_lotu'];
        echo "<tr>";
        echo "<td>".$czas."</td>";
        echo "<td>".$kierunek."</td>";
        echo "<td>".$nr."</td>";
        echo "<td>".$status."</td>";
        echo "</tr>";
    }
    mysqli_close($polaczenie);
?>
                
            </table>
        </div>

        <footer>
            <div id="stopka1">
<?php
    setcookie('ciasteczko',1,time()+7200);
    if(isset($_COOKIE['ciasteczko'])){
        echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
    }
    else{
        echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
    }
?>
            </div>

            <div id="stopka2">
                Autor: Paweł Muszyński
            </div>
        </footer>
    </body>
</html>