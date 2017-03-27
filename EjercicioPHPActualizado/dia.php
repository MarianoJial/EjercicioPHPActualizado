
<?php
//Mariano Jimenez Alvaro 
//5B

echo "<center>";

$numero = $_POST['numero'];


                       

                                   

                                   if($numero>=1 && $numero<=7){

                                               switch($numero){

                                                           

                                                           case 1: $dia="<br><br>Lunes"; break;

                                                           case 2: $dia="<br><br>Martes"; break;

                                                           case 3: $dia="<br><br>Miercoles"; break;

                                                           case 4: $dia="<br><br>Jueves"; break;

                                                           case 5: $dia="<br><br>Viernes"; break;
														   
                                                           case 6: $dia="<br><br>Sábado"; break;
														   
														   case 7: $dia="<br><br>Domingo"; break;

                                               }

                                               echo "El dia de la semana que le corresponde es $dia";

                                   }

                                   else
								   {
                                               printf("El Numero no está en el rango del 1 a 7");
											   
								   }
echo "</center>";
echo "<center><br><br><br><br>";
echo "<a href='index.php'>Regresar al menu</a>";
echo "</center>";								   

                        ?>

