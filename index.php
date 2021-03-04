<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();

// Create
//$pdo->addStudent($conn, 'exo198.eleve', 'Smith', 'Agent', 22);

// Read
$pdo->readList($conn, 'exo198.eleve');

// Update


// Delete


