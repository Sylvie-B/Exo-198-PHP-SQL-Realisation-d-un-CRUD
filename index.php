<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();

// Create
//$pdo->addStudent($conn, 'exo198.eleve', 'Smith', 'Agent', 22);

// Read
$pdo->readList($conn, 'exo198.eleve');

// Update
// todo ne marche pas
//$pdo->updateStudent($conn, 'exo198.eleve', 'nom', 'Johnson', 6);

//$prenom = 'John';
//$id = 6;
//
//$stmt = $conn->prepare("UPDATE exo198.eleve SET prenom = :prenom WHERE id = :id");
//$stmt->bindParam(':prenom', $prenom);
//$stmt->bindParam(':id', $id);
//
//$stmt->execute();
//
//if($stmt->rowCount() > 0){
//    echo 'update';
//}
//else {
//    echo 'no update';
//}

// Delete
//$pdo->deleteStudent($conn, 1);

