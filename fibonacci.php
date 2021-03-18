<?php 
	
	$serie = []; // Variable para contener la serie
	$i=0;  //Agrega el elemento correspondiente a la serie;
	$total=0;  //total de divisores para la serie
	$cantidad_divisor = 1000;   //cantidad de divisor a obtener
	
	$hora = date("Y-m-d H:i:s");
	echo "hora comienzo: ".$hora."\n";
    while ($total < $cantidad_divisor-1) {
	   if($i <= 1) {
         $serie[$i] = 1;
       } else {
 	    $serie[$i] = $serie[$i-1] + $serie[$i-2];
	   }
	   
	   $total=0;
	   $divisores='';
	   for($j = 1; $j <= $serie[$i]; $j++){
			if ($serie[$i] % $j == 0){
			    $divisores .= $j;
				if($serie[$i] != $j){	
					$divisores .= ", ";
				}
				$total++;
			}
			
		}
		
		
		if($total >=$cantidad_divisor){
		  echo "La serie del número: ".$serie[$i].": ";
		  echo $divisores;
		  //echo "\n";
		  echo " - Cantidad de Divisores (".$total.")";
          echo "\n";	
		 } else {
			 echo "serie: ".$serie[$i]." y Cantidad: ".$total."\n";
		 }
		$i++;
		
	    //echo $total."\n";
	}
	
	$hora = date("Y-m-d H:i:s");
	echo "hora fin: ".$hora."\n";

?>
