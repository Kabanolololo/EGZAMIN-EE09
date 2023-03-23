<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel='stylesheet' type='text/css' media='screen' href='styl.css'>
</head>
<body>
    <div id="baner">
        <h1>
            Portal Społecznościowy - moje konto
        </h1>
    </div>

    <div id="glowny">
        <h2>
            Moje zainteresowania 
        </h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>
            Moi znajomi
        </h2>
<?php
$pol=mysqli_connect('localhost','root','','dane');
mysqli_select_db($pol,'dane');

$query=mysqli_query($pol,'SELECT  `imie`,`nazwisko`,`opis`,`zdjecie` from osoby WHERE `Hobby_id`=1 or `Hobby_id`=2 or `Hobby_id`=6 ;');
while($a=mysqli_fetch_array($query)){
    echo "<div class='kloc'>";
    echo "<div class='zdjecia'>";
    echo "<img src=".$a[3]." alt='przyjaciel'>";
    echo "</div>";

    echo "<div class='opis'>";
    echo "<h3>".$a[0]." ".$a[1]."</h3>";
    echo "<p> Ostatni wpis: ".$a[2]."</p";
    echo "</div>";
    echo "<div class='linia'><hr></div>";
    echo "</div>";
    echo "</div>";

    
}

mysqli_close($pol);
?>
    </div>
    <div id="stopka1">
        Stronę wykonał: Łewap
    </div>
    <div id="stopka2">
        <a href="ja@portal.pl">Napisz do mnie</a>
    </div>
</body>
</html>