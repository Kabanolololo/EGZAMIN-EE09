<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rozgrywki futbolowe</title>
        <link rel="stylesheet" href="styl.css">
        <!-- baner / mecze / glowny /lewy /prawy-->
    </head>
    <body>
        <div id="baner">
            <h2>Światowe rozgrywki piłkarskie</h2>
            <img src="obraz1.jpg" alt="piłkarz">
        </div>

        <section id="mecze">
        <?php 
        
        $polaczenie = mysqli_connect('localhost','root');
        mysqli_select_db($polaczenie,'egzaminfutbol');
        
        $pytaj=mysqli_query( $polaczenie, "select * from rozgrywka WHERE zespol1 = 'EVG'");
        
        
        while($wynikuj=mysqli_fetch_array($pytaj)){
        echo "<div id=\"mecz\">";
        echo "<h3>".$wynikuj['zespol1']." - ".$wynikuj['zespol2']."</h3>";
        echo "<h4>".$wynikuj['wynik']."<h4>";
        echo "<p> w dniu: ".$wynikuj['data_rozgrywki']."</p>";
        echo "</div>";
        }
        
        ?>
        </section>
        <div style="clear:both"></div>
        <div id="glowny">
            <h2>Reprezentacja Polski</h2>
            <div id="prawy">
                <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
                <form method="post">
                    <input type="number" name="pozycja" min="1" max="4">
                    <button type="submit">Sprawdź</button>
                </form>
                <ul>
                <?php
                $wynik=$_POST['pozycja'];
                if(isset($wynik)){
                if($wynik==1){
                    $zapytaj = mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=1');
                    while($zawodnik=mysqli_fetch_array($zapytaj)){
                    echo "<li>".$zawodnik['imie']." ".$zawodnik['nazwisko']."</li>";
                    }
                }
                if($wynik==2){
                    $zapytaj = mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=2');
                    while($zawodnik=mysqli_fetch_array($zapytaj)){
                    echo "<li>".$zawodnik['imie']." ".$zawodnik['nazwisko']."</li>";
                    }
                }
                if($wynik==3){
                    $zapytaj = mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=3');
                    while($zawodnik=mysqli_fetch_array($zapytaj)){
                    echo "<li>".$zawodnik['imie']." ".$zawodnik['nazwisko']."</li>";
                    }
                }
                if($wynik==4){
                    $zapytaj = mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=4');
                    while($zawodnik=mysqli_fetch_array($zapytaj)){
                    echo "<li>".$zawodnik['imie']." ".$zawodnik['nazwisko']."</li>";
                    }
                }
            }
                ?>
                </ul>
            </div>

            <div id="lewy">
                <img src="zad1.png" alt="pilkarz" width="150px">
                <p> Autor: Paweł Muszyński </p>
            </div>
        </div>
    </body>
</html>