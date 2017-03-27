
<?php
//Mariano Jimenez Alvaro 
//5B

echo "<center>";
$nombreAlumno = $_POST['nombre'];
$edadAlumno = $_POST['edad'];
echo "TU NOMBRE ES:<br><br> ".$nombreAlumno;
echo "<br><br><br>Tu tienes ".$edadAlumno."  años";
echo "</center>";
echo"<center>";
if($edadAlumno<18)
{
	
	echo "Eres menor de edad";
}
else
{
    echo "Eres mayor de edad";
}
echo "</center>";
echo "<center><br><br><br><br>";
echo "<a href='index.php'>Regresar al menu</a>";
echo "</center>";
?>