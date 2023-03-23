<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>
            Twoje BMI
        </title>
        <link rel="stylesheet" href="styl3.css" />
    </head>

    <body>
        <header id="logo">
            <img src="wzor.png" alt="wzór BMI" />
        </header>
        <header id="baner">
            <h1>
                Oblicz swoje BMI
            </h1>
        </header>
        <div style="clear: both;"></div>
        <main id="glowny">
            <table>
                <tr>
                    <th>Interpretacja BMI</th>
                    <th>Wartość minimalna</th>
                    <th>Wartość maksymalna</th>
                </tr>
<?php
    $polaczenie=mysqli_connect('localhost','root','','egzaminbmi');
    mysqli_select_db($polaczenie,'egzaminbmi');

    $zapytanie=mysqli_query($polaczenie,'SELECT informacja,wart_min,wart_max from bmi');
    while($wynik=mysqli_fetch_array($zapytanie)){
        $ilosc=$wynik['informacja'];
        $min=$wynik['wart_min'];
        $max=$wynik['wart_max'];

        echo "<tr>";
        echo "<td>".$ilosc."</td>";
        echo "<td>".$min."</td>";
        echo "<td>".$max."</td>";
        echo "<tr>";
    }
    mysqli_close($polaczenie);
?>
            </table>
        </main>

        <div id="lewy">
            <h2>
                Podaj wagę i wzrost
            </h2>

            <form method="POST" action="bmi.php">
                Waga: <input type="number" name="waga" min="1" id=""><br>
                Wzrost w cm: <input type="number" name="wzrost" min="1" id=""><br>
                <button type="submit">Oblicz i zapamiętaj wynik</button>
            </form>
<?php

if(isset($_POST['waga']) && isset($_POST['wzrost'])){
    $polaczenie=mysqli_connect('localhost','root','','egzaminbmi');
    $weight=$_POST['waga'];
    $height=$_POST['wzrost'];
    $bmi=($weight/($height*$height));
    $bmiwynik=$bmi*10000;
    $data= date("Y-m-d");
    echo "Twoja waga: ".$weight."; Twój wzrost: ".$height."<br>";
    echo "BMI wynosi: ".$bmiwynik;

    if($bmiwynik>=0 && $bmiwynik<=18 ){
        $insert="INSERT into wynik (`id`,`bmi_id`,`data_pomiaru`,`wynik`) VALUES (NULL, 1,'$data','$bmiwynik');";
        mysqli_query($polaczenie,$insert);
    }
    elseif($bmiwynik>=19 && $bmiwynik<=25 ){
        $insert="INSERT into wynik (`id`,`bmi_id`,`data_pomiaru`,`wynik`) VALUES (NULL, 2,'$data','$bmiwynik');";
        mysqli_query($polaczenie,$insert);
    }
    elseif($bmiwynik>=26 && $bmiwynik<=30 ){
        $insert="INSERT into wynik (`id`,`bmi_id`,`data_pomiaru`,`wynik`) VALUES (NULL, 3,'$data','$bmiwynik');";
        mysqli_query($polaczenie,$insert);
    }
    elseif($bmiwynik>=31 && $bmiwynik<=100 ){
        $insert="INSERT into wynik (`id`,`bmi_id`,`data_pomiaru`,`wynik`) VALUES (NULL, 4,'$data','$bmiwynik');";
        mysqli_query($polaczenie,$insert);
    }


    mysqli_close($polaczenie);
}
?>
        </div>

        <div id="prawy">
            <img src="rys1.png" alt="ćwiczenia">
        </div>
        <div style="clear: both;"></div>
        
        <footer id="stopka">
            Autor: Paweł Muszyński <a href="kwerendy.txt" target="_blank">Zobacz kwerendy</a>
        </footer>
    </body>
</html>