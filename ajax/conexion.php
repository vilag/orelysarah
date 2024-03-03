<?php

	$mysqli=new mysqli('srv366.hstgr.io','u690371019_wedding','BN66>ww2@B','u690371019_wedding');

	if ($mysqli->connect_errno) {

		echo "No se ha podido conectar con el servidor, error: ".mysqli->connect_error;;
		// code...
	}