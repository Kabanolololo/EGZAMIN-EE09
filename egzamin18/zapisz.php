<?php
$connect=mysqli_connect('localhost','root','','wedkowanie');
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$adres=$_POST['adres'];

$insert="INSERT INTO karty_wedkarskie (`imie`,`nazwisko`,`adres`,`data_zezwolenia`,`punkty`) VALUES
 ('$imie','$nazwisko','$adres',NULL,NULL);";
 mysqli_query($connect,$insert);

 mysqli_close($connect);
?>