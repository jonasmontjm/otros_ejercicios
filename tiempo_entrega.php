<?php 
    
    $rango = $argv[1];
	$dias = 0;
	$temporal = 0;

	echo "Calculando .";
	
	while($rango > 0){
		echo ".";
		switch($rango)
		    {
		    case ($rango < 100):
				$dias = $dias + 0;
				$rango = $rango - 99;
				if($temporal > 0){
					$rango = $rango + $temporal;
					$temporal = 0;
				}
		    break;
		 
		    case (($rango >= 100) && ($rango <= 199)):
				$dias = $dias + 1;
				$rango = $rango - 199;
				if($temporal > 0){
					$rango = $rango + $temporal;
					$temporal = 0;
				}
		    break;
		 
		    case (($rango >= 200) && ($rango <= 299)):
				$dias = $dias + 1;
				$rango = $rango - 299;
				if($temporal > 0){
					$rango = $rango + $temporal;
					$temporal = 0;
				}
		    break;
			
			case (($rango >= 300) && ($rango <= 399)):
				$dias = $dias + 2;
				$rango = $rango - 399;
				if($temporal > 0){
					$rango = $rango + $temporal;
					$temporal = 0;
				}
		    break;
			
			case (($rango >= 400) && ($rango <= 499)):
				$dias = $dias + 3;
				$rango = $rango - 499;
				if($temporal > 0){
					$rango = $rango + $temporal;
					$temporal = 0;
				}

		    break;

		    case ($rango >= 500):
			    $temporal = ($rango - 499);
			    $rango = $rango - $temporal;
		    break;
		    }

	}
	echo "\n";
	echo "Kilometros de destino: ".$argv[1]."KM con un tiempo de entrega de: ".$dias." días"."\n";

?>
