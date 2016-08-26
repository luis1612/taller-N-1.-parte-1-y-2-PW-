<?php 

   echo " <h1>Taller N.1 parte 2 (PW)</h1><br>";
 /**
 * autor: luis ibarguen 
 * programa: parte 2 del taller pw
 * Descripcion: programa que ejecuta en el navegador un mensaje 
 * Fecha: 20 - agosto - 2016
 */
 
   echo"<h1> Haciendo uso de la sentencia IF - ELSE, realizar los siguiente ejercicios.</h1><br>"; 

   echo" <h1>a.Determinar si un numero es negativo.</h1><br>";



   
	$numero=6;

	if ($numero>0) {
		echo "el numero ".$numero.' ES POSITIVO';
	} else {
		if ($numero<0) {
			echo"el numero ".$numero.' ES NEGATIVO';
		} else {
			echo "el numero ".$numero.' ES NEUTRO O ES CERO';
		}
	}

    echo "   //------------------------------------------------------------------------//<br>"; 


    echo" <h1>b.Imprimir verdadero o falso de acuerdo al contenido de una variable </h1><br>";
      
       $lvar=true;

       if ($lvar==true) {
       	echo "el contenido de la variable es vedadero ";
       }
       else{

       	echo "el contenido de la variable es falso ";
       }


    echo "   //------------------------------------------------------------------------//<br>";   

    echo"<h1> c.Determinar si un numero es primo </h1><br>";

   
   $num=7;//numero por asignacion no por insercion. 
	
   /*
	$i = 2;

	while ($i<$num && $num%$i!=0) {
		$i = $i+1;
	}
	if ($i==$num) {
		echo ' El numero ',$num,' SI es primo. ';
	} else {
		echo ' El numero ',$num,' NO es primo. ';
	}*/

     $cont=0;  
     $num=4; 
     for( $i=1;$i<=$num;$i++) 
         { 
            if($num%$i==0) 
				$cont=$cont+1; 
				} 

			if($cont==2) 
				{ 
					echo"el numero",$num," SI es primo"; 
				} 
				else 
				{ 
					echo "El numero ",$num," No es primo"; 
				} 


  
    echo "   //------------------------------------------------------------------//<br>";  

  
  echo"<h1>d.Determinar si un numero es mayor que 35 </h1><br>";


  $n_may=50;

	
	if ($n_may>35) {
		echo ' El numero ',$n_may, ' es mayor que 35',PHP_EOL;
	} else {
		echo ' El numero',$n_may, ' NO es mayor que 35',PHP_EOL;
	}


    echo "   //------------------------------------------------------------------------//<br>"; 

    

    echo"<h1>e.Determinar si un numero es positivo y menor que 100.</h1><br>";
  

    $n=26;
	if ($n>0) {
		echo 'ES POSITIVO ';
		if ($n<=99) {
			echo ' numero ',$n,' Menor a 100';
		} else {
			echo ' numero ',$n,' Mayor o Igual  a 100';
		}
	} else {
		if ($n<0) {
			echo 'ES NEGATIVO ',$n;
		} else {
			echo 'ES NEUTRO O SEA CERO';
		}
	}


    echo "  //------------------------------------------------------------------------//<br>";


    echo"<h1>f.Determinar si un numero pertenece al intervalo [-3,27].</h1><br>";

    $b=-1;

	if ($b>=-3 && $b<=27) {
		echo ' El numero ',$b ,' SI pertenece al intervalo [-3,27].';
	} else {
		echo ' El numero pertenece ',$b ,' NO al intervalo [-3,27].';
	}



    echo "   //------------------------------------------------------------------------//<br>";
  


    echo"<h1> g.Determinar si un numero no pertenece al intervalo [25,50].</h1><br>";
    
    $b=12;

	if ($b>=25 && $b<=50) {
		echo " El numero", $b," pertenece SI al intervalo [25,50].<br";
	} else {
		echo " El numero", $b,  " pertenece NO al intervalo [25,50].";
	}



    echo "   //------------------------------------------------------------------------//<br>";

    

    echo"<h1>h.Determinar si el modulo de un numero es menor que 15.</h1><br>";
     

   
	$c=12;
	$d=12;

    $mod=$c % $d; 


   echo" modulo es ",$mod;
   
    echo" ";

  if ($mod <  15) {
	echo ' El   modulo del numero es menor que 15.';
	} else {
		if ($mod > 15) {
			echo ' El   modulo del numero es mayor que 15.';
		} else {
			echo ' El   modulo del numero es igual a 15.';
		}
	}
    
   

    echo "   //-------------------------------------------------------------//<br>";


   echo"<h1> i.Determinar si un entero es impar (lo sera cuando el resto de su division (operador aritmetico '%' por 2 sea distinto de cero).</h1><br>"; 


   $num_=33;

	if ($num_%2!=0) {
		echo 'El numero es ',$num_,' Impar';
	} else {
		echo 'El numero es ',$num_,' Par';
	}


    echo "   //------------------------------------------------------------------------//<br>";



    echo"<h1>j.Eleve al cuadrado un numero si es par y al cubo si es impar. </h1><br>";
    
    $n_um=44;

	if ($n_um%2==0) {
		$cuadrado = $n_um*$n_um;
		echo 'El numero es Par y elevado al cuadrado es ',$cuadrado;
	} else {
		$cubo = $n_um*$n_um*$n_um;
		echo 'El numero es Impar y elevado al cubo es ',$cubo;
	}


    echo "   //------------------------------------------------------------------------//<br>";


    echo "<h1> k.Calcule el maximo de 2 numeros dados.</h1><br> ";

    $x=9;
    $y=2;

    if($x==$y){
       echo' Son iguales ';
     }
     else
        {
	        if($x > $y){
            echo' el mayor es: ',$x;
	        }
	        else{
                echo' el mayor es: ',$y;
	            }
        }


    echo "   //------------------------------------------------------------------------//<br>";


    echo"<h1> l.Calcule el maximo de tres numeros.</h1><br>";

   
     
   $n1=9;
   $n2=10;
   $n3=60;

  if( $n1 > $n2 && $n1 > $n3){
       echo'El numero mayor es ',$n1;
      }else{
          if($n2 >  $n1 && $n2 > $n3){
          echo'El numero mayor es ',$n2;
          }else{
          echo 'El numero mayor es ',$n3;
        }
    }
   


    echo "   //------------------------------------------------------------------------//<br>";
     

    echo"<h1> m.Ordenar 2 numeros de menor a mayor</h1><br>";


    $n_1=20;
	$n_2=30;
	if ($n_2>$n_1) {
		echo 'LOS NUMEROS ORDENADOS ES=',$n_1,',',$n_2;
	} else {
		if ($n_1>$n_2) {
			echo 'LOS NUMEROS ORDENADOS ES=',$n_2,',',$n_1;
		}
	}


    echo "   //------------------------------------------------------------------------//<br>";
   


    echo"<h1>n.Ordenar 3 numeros de mayor a menor</h1><br>"; 

     
  
    $N1=33;
	$N2=22;
	$N3=11;
	if ($N1>$N2) {
		if ($N2>$N3) {
			echo 'LOS NUMEROS ORDENADOS ES=',$N1,',',$N2,',',$N3;
		} else {
			if ($N1>$N3) {
				echo 'LOS NUMEROS ORDENADOS ES=',$N1,',',$N3,',',$N2;
			} else {
				echo 'LOS NUMEROS ORDENADOS ES=',$N3,',',$N1,',',$N2;
			}
		}
	} else {
		if ($N1>$N3) {
			echo 'LOS NUMEROS ORDENADOS ES=',$N2,',',$N1,',',$N3;
		} else {
			if ($N2>$N3) {
				echo 'LOS NUMEROS ORDENADOS ES=',$N2,',',$N3,',',$N1;
			} else {
				echo 'LOS NUMEROS ORDENADOS ES=',$N3,',',$N2,',',$N1;
			}
		}
	}



    echo "   //------------------------------------------------------------------------//<br>";
    

  echo"<h1>o.Determinar la longitud de una cadena y si es mayor a 5 caracteres indicar nombre largo,de lo contrario nombre corto.</h1><br>";



    $cadena = 'ibarguen';
    echo strlen($cadena); // 8

     echo' '; 

    if ($cadena > 5 ){
         echo" ",$cadena,' Nombre largo';
    }
    else{
            echo " ",$cadena, ' Nombre Corto ';
        }

    echo "   //------------------------------------------------------------------------//<br>";
   



    echo"<h1> p.Determinar si una variable existe</h1><br>";
     
     //$variable=10;  // para verificar que la variable SI existe.

    if(isset($variable)){
       echo'variable existe';
      }else{
          echo'variable NO existe';
        }    


    echo "   //------------------------------------------------------------------------//<br>";
      

    echo "<h1>q.Determinar si una variable esta vacia o tiene contenido </h1><br>";

    

    //isset() devuelve true. El valor ya no es nulo aunque esté vacío
     
     
     $var;  //$var = "";  0 $var=90; -> para contenido.



     if(isset($var)){
       echo'variable tiene contenido';
      }else{
          echo'variable esta vacia';
        }




 ?>