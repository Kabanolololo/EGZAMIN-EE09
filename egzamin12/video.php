<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <title>
            Video On demand
        </title>
        <link rel="stylesheet" href="styl3.css">
<?php
$polaczenie=mysqli_connect('localhost','root','','dane3');
mysqli_select_db($polaczenie,'dane3');
?>
    </head>
    <body>
        <div id="banerlewy">
            <h1>
                Internetowa wypożyczalnia filmów
            </h1>
        </div>
        <div id="banerprawy">
            <table style="color: white;">
                <tr>
                    <td>Kryminał</td>
                    <td>Horror</td>
                    <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </div>
        <div style="clear: both;"></div>
        <div class="lista">
            <h3>
                Polecamy
            </h3>
<?php
$zapytanie=mysqli_query($polaczenie,'SELECT id,nazwa,opis,zdjecie from produkty WHERE id IN(18,22,23,25)');
while($wynik=mysqli_fetch_array($zapytanie)){
    echo "<div class='film'>";
    echo "<h4>".$wynik['nazwa']."</h4>";
    echo "<img src=".$wynik['zdjecie']." alt='film'>";
    echo "<p>".$wynik['opis']."</p>";
    echo "</div>";
}
?>
<div style="clear: both;"></div>
        </div>
        <div class="lista">
            <h3>
                Filmy fantastyczne
            </h3>
<?php
$zapytanie1=mysqli_query($polaczenie,'SELECT id,nazwa,opis,zdjecie FROM produkty WHERE Rodzaje_id=12');
while($wynik1=mysqli_fetch_array($zapytanie1)){
    echo "<div class='film'>";
    echo "<h4>".$wynik1['nazwa']."</h4>";
    echo "<img src=".$wynik1['zdjecie']." alt='film'>";
    echo "<p>".$wynik1['opis']."</p>";
    echo "</div>";
}
?>
<div style="clear: both;"></div>
        </div>
        <div id="stopka">
            <form method="POST" action="video.php">
                Usuń film nr.: <input type="text" name="usun">
                <input type="submit" value="Usuń film"><br>
                Stronę wykonał: <a href="ja@poczta.com" target="_blank">Paweł Muszyński</a>
<?php
if(isset($_POST['usun'])){
    $a=$_POST['usun'];
    $wpisz="DELETE FROM produkty WHERE id=".$a;
    mysqli_query($polaczenie,$wpisz);
}
?>
            </form>
        </div>
    </body>
</html>