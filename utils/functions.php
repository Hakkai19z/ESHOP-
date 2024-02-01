<?php 

// Fichier de functions utiles

function checkExists($field, $param, $pdo){
    // Vérifier si le nom et l'email ne sont pas dans la base de données
    $sql= "SELECT * FROM users WHERE $field = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$param]);
    
    if ($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}