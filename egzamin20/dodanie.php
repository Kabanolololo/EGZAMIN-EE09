<?php
$conn=mysqli_connect('localhost','root','','ee09');

$a=$_POST['numer'];
$b=$_POST['jeden'];
$c=$_POST['dwa'];
$d=$_POST['trzy'];

$query="INSERT INTO ratownicy (`nrKaretki`,`ratownik1`,`ratownik2`,`ratownik3`) VALUES ('$a','$b','$c','$d')";
mysqli_query($conn,$query);

mysqli_close($conn);
?>