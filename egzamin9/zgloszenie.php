<?php
$polaczenie=mysqli_connect('localhost','root','','egzaminratownik');
mysqli_select_db($polaczenie,'egzaminratownik');

$rat=$_POST['rat'];
$dysp=$_POST['dysp'];
$ulica=$_POST['adres'];
echo $rat.$dysp.$ulica;

if(isset($rat)&& isset($dysp)&& isset($ulica)){
    $insert="INSERT INTO zgloszenia (`id`,`ratownicy_id`,`dyspozytorzy_id`,`adres`,`pilne`,`czas_zgloszenia`) VALUES (NULL,'$rat','$dysp','$ulica',0,CURRENT_TIME);";
    mysqli_query($polaczenie,$insert);
}
mysqli_close($polaczenie);
?>