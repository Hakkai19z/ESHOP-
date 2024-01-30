<?php 

// Définition de l'URL à partir de laquelle nous récupérerons les produits
$url= 'https://fakestoreapi.com/products';

// Initialisation de la requête cURL avec l'URL spécifiée
$ch = curl_init($url);

// Configuration de l'option CURLOPT_RETURNTRANSFER pour que cURL retourne la réponse au lieu de l'afficher directement
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Exécution de la requête cURL et stockage de la réponse dans la variable $resp
$resp = curl_exec($ch);

// Vérification s'il y a une erreur lors de l'exécution de la requête cURL
if($e = curl_error($ch)){
    var_dump($e) ;
}else{
    // Décodage de la réponse JSON en un tableau associatif et stockage dans la variable $products
    $products = json_decode($resp, true);
}

// Fermeture de la session cURL
curl_close($ch);



