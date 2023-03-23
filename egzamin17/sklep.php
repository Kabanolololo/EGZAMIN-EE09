<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='styl2.css'>
    <title>Warzywniak</title>
</head>
<body>
    <div id="banerl">
        <h1>
            Internetowy Sklep z eko-warzywami
        </h1>
    </div>
    <div id="banerp">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl" target="_blank">soki</a></li>
        </ol>
    </div>
    <div id="glowny">
<?php
$pol=mysqli_connect('localhost','root','','dane2');
mysqli_select_db($pol,'dane2');

$query = mysqli_query($pol,'SELECT `nazwa`,`ilosc`,`opis`,`cena`,`zdjecie` from produkty where Rodzaje_id in (1,2);');
while($a=mysqli_fetch_array($query)){
    echo "<div class='produkt'>";
    echo "<img src=".$a['zdjecie']." alt='warzywniak'>";
    echo "<h5>".$a[0]."</h5>";
    echo "<p> opis: ".$a[2]."</p>";
    echo "<p> na stanie: ".$a[1]."</p>";
    echo "<h2>".$a[3]." zł</h2>";
    echo "</div>";
}
?>
    </div>
    <div id="stopka">
        <form method="POST" action="sklep.php">
            <label for="nazwa">Nazwa</label>
            <input type="text" id="nazwa" name="nazwa"> 
            <label for="cena">Cena</label>
            <input type="text" id="cena" name="cena"> 
            <input type="submit" value="Dodaj produkt">
        </form>
<?php
if(isset($_POST['nazwa']) && isset($_POST['cena'])){
    $nazwa = $_POST['nazwa'];
    $cena =  $_POST['cena'];

    $insert="INSERT INTO produkty (`Rodzaje_id`,`Producenci_id`,`nazwa`,`ilosc`,`cena`,`zdjecie`) VALUES (1,4,'$nazwa','10', '$cena', 'owoce.jpg')";
    mysqli_query($pol,$insert);
}
mysqli_close($pol);
?>
        Stronę wykonał: jaciukowstwo
    </div>
</body>
</html>