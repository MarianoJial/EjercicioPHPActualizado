
<?php
//Mariano Jimenez Alvaro 
//5B

echo "<center>";

$velocidad = $_POST['velocidad'];
$segundos = $_POST['segundos'];
$metros = $velocidad/$segundos;
echo "<br><br><br>";
echo "la distancia que recorrer es: <h4>".$metros." </h4>metros";


echo "<center><br><br><br><br>";
echo "<a href='index.php'>Regresar al menu</a>";
echo "</center>";
                        ?>