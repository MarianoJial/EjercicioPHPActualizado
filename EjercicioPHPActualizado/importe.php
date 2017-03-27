
<?php
//Mariano Jimenez Alvaro 
//5B

echo "<center>";

$importe = $_POST['importe'];
$calcular=$importe*0.16;
$calculo=$importe*0.10;

if($importe>1500)
	
{
	
   echo "El importe de 0.16% es:<br><br>".$calcular."";
}
else 
{
	
    echo "El importe de 0.10% es:<br><br>".$calculo."";
}
echo "</center>";
echo "<center><br><br><br><br>";
echo "<a href='index.php'>Regresar al menu</a>";
echo "</center>";
?>