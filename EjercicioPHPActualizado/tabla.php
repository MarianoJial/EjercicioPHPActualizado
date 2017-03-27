
<?php
//Mariano Jimenez Alvaro 
//5B

echo "<center>";

$tablas = $_POST['tablas'];
$x=1;

                                  

                                   for($x=1;$x<=10;$x++)
								   {
                                               echo "$tablas X $x =". $tablas * $x."<BR>";
								   }
								   echo "</center>";
echo "<center><br><br><br><br>";
echo "<a href='index.php'>Regresar al menu</a>";
echo "</center>";
                        ?>