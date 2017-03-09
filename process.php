<?php
if(isset($_GET['titre']) && isset($_GET['lien']) && isset($_GET['option'])) {
	$json = file_get_contents('mark.json');
	$data = json_decode($json, true);
	
	if(is_null($data)) {
		$data = array();	
	}

	$data[] = array(
		'titre' => $_GET['titre'],
		'lien' => $_GET['lien'],
		'option' => $_GET['option']
	);

	$json = json_encode($data);
	$statut = file_put_contents('mark.json', $json);


}