<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Prognoza pogody wrocław</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styl2.css'>
    <script src='main.js'></script>
</head>
<body>
    <div id="baner1">
        <img src="logo.png" alt="meteo">
    </div>
    <div id="baner2">
        <h1>
            Prognoza dla Wrocławia
        </h1>
    </div>
    <div id="baner3">
        <p>
            maj, 2019 r.
        </p>
    </div>
    <div id="glowny">
        <table>
        <tr>
            <th>DATA</th>
            <th>TEMPERATURA W NOCY</th>
            <th>TEMPERATURA W DZIEŃ</th>
            <th>OPADY [mm/h]</th>
            <th>CIŚNIENIE [hPa]</th>
        </tr>
<?php
$con=mysqli_connect('localhost','root','','prognoza');
$query='SELECT * FROM pogoda WHERE miasta_id=1 order BY data_prognozy;';
$query1=mysqli_query($con,$query);
while($a=mysqli_fetch_array($query1)){
    echo "<tr>";
    echo "<td>".$a['data_prognozy']."</td>";
    echo "<td>".$a['temperatura_noc']."</td>";
    echo "<td>".$a['temperatura_dzien']."</td>";
    echo "<td>".$a['opady']."</td>";
    echo "<td>".$a['cisnienie']."</td>";
    echo "</tr>";
}
mysqli_close($con)
?>
        </table>
    </div>
    <div id="lewy">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </div>
    <div id="prawy">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="stopka">
        <p>
            Stronę wykonał: 000
        </p>
    </div>
</body>
</html>