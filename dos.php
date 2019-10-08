<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
<center><h1><tittle>Tabla</tittle></center></h1>
<font size="5"><center><h2> ↓ El resultado es el siguiente: ↓</h2></center>
</head>
<body bgcolor="12C3D5">
<?php

$t = $_GET['num'];
for ($m=   1; $m <=    12 ; $m++) {
$a=$t*$m;

 echo"$t x $m"."= " . "$a" . "<BR>";
}



?>



</body>
</html>
