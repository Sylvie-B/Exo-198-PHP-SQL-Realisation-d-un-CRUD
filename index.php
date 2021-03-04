<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();

// Create
//$pdo->addStudent($conn, 'exo198.eleve', 'Smith', 'Agent', 22);

// Read
$pdo->readList($conn, 'exo198.eleve');

echo "<br>";

// Update
$pdo->updateStudent($conn, 'Mike', 'Smith', 18, 5);

// Read after update
$pdo->readList($conn, 'exo198.eleve');

// Delete
//$pdo->deleteStudent($conn, 1);

