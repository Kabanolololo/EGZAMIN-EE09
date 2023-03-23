<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <title>
            Wycieczki i urlopy
        </title>
        <link rel="stylesheet" href="styl3.css"/>
    </head>
    <body>
        <header>
            <div id="baner">
                <h1>
                    BIURO PODRÓŻY
                </h1>
            </div>
        </header>
        <div id="lewy">
            <h2>
                KONTAKT
            </h2>
            <a href="biuro@wycieczki.pl">
                Napisz do nas
            </a>
            <p>
                telefon: 555666777
            </p>
        </div>
        <div id="srodkowy">
            <h2>
                Galeria
            </h2>
<?php
$polaczenie=mysqli_connect('localhost','root','','egzaminwycieczka');
mysqli_select_db($polaczenie,'egzaminwycieczka');

$zapytanie1=mysqli_query($polaczenie,'SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis');
while($wynik1=mysqli_fetch_array($zapytanie1)){
    echo "<img src=".$wynik1['nazwaPliku']." alt=".$wynik1['podpis']."/>";
}
?>
        </div>
        <div id="prawy">
            <h2>
                Promocje
            </h2>
            <table>
                <tr>
                    <td>Jesień</td>
                    <td>Grupa 4+</td>
                    <td>Grupa 10+</td>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </div>
        
        <div id="dane">
            <h2>
                LISTA WYCIECZEK
            </h2>
<?php
$zapytanie2=mysqli_query($polaczenie,'SELECT id,dataWyjazdu,cel,cena from wycieczki WHERE dostepna="1";');
while($wynik2=mysqli_fetch_array($zapytanie2)){
    echo $wynik2['id']." ".$wynik2['dataWyjazdu'].", ".$wynik2['cel'].", ".$wynik2['cena']."<br>";
}
?>
        </div>
        <footer>
            <div id="stopka">
                <p>
                    Stronę wykonał: Paweł Muszyński
                </p>
            </div>
        </footer>
    </body>
</html>