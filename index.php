<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();

// Create
//$pdo->addStudent($conn, 'exo198.eleve', 'Smith', 'Agent', 22);

// Read
$pdo->readList($conn, 'exo198.eleve');

// Update
$pdo->updateStudent($conn, 'exo198.eleve', 'prenom', 'John', 6);




// Delete


