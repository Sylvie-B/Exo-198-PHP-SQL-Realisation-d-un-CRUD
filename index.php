<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();

// Create
//$pdo->addStudent($conn, 'exo198.eleve', 'Smith', 'Agent', 22);

// Read
$pdo->readList($conn, 'exo198.eleve');

// Update
//$pdo->updateStudent($conn, 'exo198.eleve', 'nom', 'Johnson', 6);

$nom = 'Johson';
$id = 6;

$stmt = $conn->prepare("UPDATE exo198.eleve SET nom = :nom WHERE id = :id");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':id', $id);

$stmt->execute();

if($stmt->rowCount() > 0){
    echo 'update';
}
else {
    echo 'no update';
}


// Delete


