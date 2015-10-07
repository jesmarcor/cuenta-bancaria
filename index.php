<?php
		
		if (empty($_POST['entidad']) || empty($_POST['oficina']) || empty($_POST['digitodecontrol']) || empty($_POST['numerodecuenta']) ) {
				
				include 'formulario.html.php';
		
		}else if (strlen ($_POST['entidad']) != 4 || strlen ($_POST['oficina']) != 4 || strlen ($_POST['digitodecontrol']) != 2 || strlen ($_POST['numerodecuenta']) !=10 ){

				include 'formulario.html.php';
		
		}else{

				$entidad = $_POST['entidad'];
				$oficina = $_POST['oficina'];
				$digitodecontrol = $_POST['digitodecontrol'];
				$numerodecuenta = $_POST['numerodecuenta'];

				include 'digitodecontrol.html.php';

		}
?>