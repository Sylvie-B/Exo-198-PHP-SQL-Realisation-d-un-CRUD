<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();

//$conn->exec($pdo->addStudent('Doe', 'Jane', 19));

$pdo->readList($conn, 'exo198.eleve');

