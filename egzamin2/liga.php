<html>
    <head lang="pl-PL">
        <meta charset="Utf-8">
        <title>piłka nożna</title>
        <link rel="stylesheet" href="styl2.css" type="text/css" />
    </head>

    <body>
        <header id="baner">
            <h3>Reprezentacja polski w piłce nożnej</h3>
            <img src="obraz1.jpg" alt="reprezentacja">
        </header>

        <div id="lewy">
            <form method="POST">
                <select name="pozycja">
                    <option value="a">Bramkarze</option>
                    <option value="b">Obrońcy</option>
                    <option value="c">Pomocnicy</option>
                    <option value="d">Napastnicy</option>
                </select>
                <button type="submit">Zobacz</button>
            </form>
            <img src="zad2.png" alt="Nie dziala">
            <p>
                Autor: Paweł Muszyński
            </p>
        </div>

        <div id="prawy">
            <ol>
            <?php
            $polaczenie=mysqli_connect("localhost","root");
            mysqli_select_db($polaczenie, "egzaminfubol1");

            $pozycja=$_POST['pozycja'];

            if($pozycja=='a'){
                $zapytanie=mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=1');
                while($w=mysqli_fetch_array($zapytanie)){
                    echo "<li>".$w['imie']." ".$w['nazwisko']."</li>";
                }
            }
            elseif($pozycja=='b'){
                $zapytanie=mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=2');
                while($w=mysqli_fetch_array($zapytanie)){
                    echo "<li>".$w['imie']." ".$w['nazwisko']."</li>";
                }
            }
            elseif($pozycja=='c'){
                $zapytanie=mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=3');
                while($w=mysqli_fetch_array($zapytanie)){
                    echo "<li>".$w['imie']." ".$w['nazwisko']."</li>";
                }
            }
            elseif($pozycja=='d'){
                $zapytanie=mysqli_query($polaczenie,'select imie,nazwisko from zawodnik where pozycja_id=4');
                while($w=mysqli_fetch_array($zapytanie)){
                    echo "<li>".$w['imie']." ".$w['nazwisko']."</li>";
                }
            }
            ?>
            </ol>
        </div>
        <div style="clear: both;"></div>
        <main id="glowny">
            <h3>Liga mistrzów</h3>
        </main>

        <div id="liga">
            <?php
            $zapytanie2=mysqli_query($polaczenie,'select zespol,punkty,grupa from liga order by punkty desc');
            while($punkt=mysqli_fetch_array($zapytanie2)){
                echo "<div id='wyniki' align='center'>";
                echo "<h2>".$punkt['zespol']."</h2>";
                echo "<h1>".$punkt['punkty']."</h1>";
                echo "<p>Grupa: ".$punkt['grupa']."</p>";
                echo "</div>";
            }
            ?>
        </div>
    </body>
</html>