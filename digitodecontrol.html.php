<?php

	$entidad = $_POST['entidad'];
	$oficina = $_POST['oficina'];
	$digitodecontrol = $_POST['digitodecontrol'];
	$numerodecuenta = $_POST['numerodecuenta'];

		function calculodigitodecontrol($entidad, $oficina, $numerodecuenta){
			
			$digcont = "";
			$validacion = array(6, 3, 7, 9, 10, 5, 8, 4, 2, 1);

			foreach (array($entidad . $oficina, $numerodecuenta ) as $conjunto) {
				
				$suma = 0;
				for ($i=0, $ted=strlen($conjunto); $i<$ted; $i++) { 
					$suma += $validacion[$i] * substr($conjunto, $ted - $i -1, 1);
				}

				$digit = 11 - $suma %11;
				if($digit==11){
					$digit = 0;
				}elseif($digit==10){
					$digit = 1;
				}

				$digcont .= $digit;
			}

		return $digcont;
		
		}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Verificación de número de cuenta</title>
</head>
<body>

	<?php echo "Numero introducido: " .$entidad ." ". $oficina ." ". $digitodecontrol ." ". $numerodecuenta ?>
		
		<br>
		
		<?php

		$numero_validacion = calculodigitodecontrol($entidad,$oficina,$numerodecuenta);
		
		if ($digitodecontrol == $numero_validacion) {
			
			echo "El numero de cuenta insertado es correcto";
		
		}else{
			
			echo "El numero de cuenta insertado no es correcto";
		}


	?>
	
</body>
</html>