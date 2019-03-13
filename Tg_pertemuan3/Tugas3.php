<?php
	$organisasi = array(
		$kerindangan = array(
			"ketua"	=> "Hifni",
			"wakil"	=>"Azki"
		),
		$keamanan = array(
			"ketua"	=> "Humam",
			"wakil"	=> "Tsaqif"
		),
		$Ketertiban = array(
			"ketua"	=> "Udin",
			"wakil"	=> "Fauzan"
		),
		$Kesejahteraan = array(
			"ketua"	=> "Udin",
			"wakil"	=> "Fauzan",
			"Konsumsi" => "Hakim"
		)
	);
	foreach ($kerindangan as $key => $value){
		echo $kerindangan[$key];
	}
	foreach ($keamanan as $key => $value){
		echo $keamanan[$key];
	}
	foreach ($ketertiban as $key => $value){
		echo $ketertiban[$key];
	}
	foreach ($kesejahteraan as $key => $value){
		echo $kesejahteraan[$key];
	}
?>