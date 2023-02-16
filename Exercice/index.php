<?php

// Accéder aux données dans le tableau
$curl = curl_init();

// Envoi d'une requête GET à reqres.in
// serveur pour obtenir des données JSON
curl_setopt($curl, CURLOPT_URL, "https://reqres.in/api/users?page=2");

// Demander à curl de stocker les données JSON dans une variable au lieu de les afficher à l'écran
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Exécution de curl
$response = curl_exec($curl);

// Vérifier si une erreur se produit
// pendant la demande ou non
if ($e = curl_error($curl)) {
	echo $e;
} else {

	// Décodage des données JSON
	$decodedData = json_decode($response, true);

	// Sortie des données JSON sous forme décodée
	var_dump($decodedData);
}

// Boucle de fermeture
curl_close($curl);
