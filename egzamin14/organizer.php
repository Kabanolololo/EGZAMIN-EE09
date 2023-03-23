<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Organizer</title>
    <link rel='stylesheet' type='text/css' media='screen' href='styl6.css'>
</head>
<body>
<?php //deklaracja bazy danych
$a=mysqli_connect('localhost','root','','egzamin6');
mysqli_select_db($a,'egzamin6');
?>
    <div id="baner1">
        <h2>
            MÓJ ORGANIZER
        </h2>
    </div>
    <div id="baner2">
        <form method="post" action="organizer.php">
            Wpis wydarzenia: <input type="text" name="wpis"> <input type="submit" value="ZAPISZ">
        </form>
<?php //wpis do bazy
$wyd=$_POST['wpis'];
$zap2="UPDATE zadania SET wpis='$wyd' WHERE dataZadania='2020-08-27'";
$wynik=mysqli_query($a,$zap2);
?>
    </div>
    <div id="baner3">
        <img src="logo2.png" alt="Mój organizer">
    </div>
    <div style="clear: both;"></div>
    <div id="glowny">
<?php //wyswietalnie kalendarzyka
$zap=mysqli_query($a,'SELECT dataZadania, miesiąc, wpis FROM zadania WHERE miesiąc = "sierpień"');
while($b=mysqli_fetch_array($zap)){
    echo "<div class='okno'>";
    echo "<h6>".$b['dataZadania'].",".$b['miesiąc']."</h6>";
    echo "<p>".$b['wpis']."</p>";
    echo "</div>";
}
?>
    </div>
    <div style="clear: both;"></div>
    <div id="stopka">
<?php //wyswietalnie aktualnej daty w stopce
$zap1=mysqli_query($a,'SELECT miesiąc, rok FROM zadania WHERE dataZadania="2020-08-01" LIMIT 1');
while($c=mysqli_fetch_array($zap1)){
    echo "<h6> miesiąc: ".$c['miesiąc'].", rok: ".$c['rok']."</h6>";
}
mysqli_close($a);
?>
        <p>
            Stronę wykonał: Paweł Muszyński
        </p>
    </div>
</body>
</html>