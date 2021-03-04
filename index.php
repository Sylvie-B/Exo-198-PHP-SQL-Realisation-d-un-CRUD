<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();


function addEleve ($nom, $prenom, $age, $conn) {
    try{


        $sql = "
        INSERT INTO exo198.eleve (nom, prenom, age)
        VALUES ($nom, $prenom, $age)
        ";

        $result = $conn->exec($sql);
        echo $result;

    }
    catch (PDOException $exception){
        echo "une erreur est survenue : ".$exception->getMessage();
    }

}

addEleve('Doe', 'John', 18, $conn);

