<?php
require 'DbObj.php';

$pdo = new DbObj();
$conn = $pdo->connect();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Eleve</title>
</head>
<body>
    <section>
        <h1>Formulaire élève</h1>
        <form method="post" action="index.php">
            <input type="text" name="name" placeholder="nom">
            <input type="text" name="firstName" placeholder="prénom">
            <input type="text" name="age" placeholder="age">
            <div>
                <input type="submit" value="Ajouter">
            </div>
        </form>
    </section>
    <section>
        <h2>Liste</h2>

            <!-- listing -->
            <?php
            $pdo->readList($conn);
            ?>

    </section>

</body>
</html>

<?php

// check inputs presence

if (isset($_POST['name'], $_POST['firstName'], $_POST['age'])){
    $pdo->addStudent($conn, $_POST['name'], $_POST['firstName'], $_POST['age']);
}


// Create
//$pdo->addStudent($conn, 'King', 'Arthur', 21);

// Read
//$pdo->readList($conn);

// Update
//$pdo->updateStudent($conn, 'Mike', 'Smith', 18, 5);

// Delete
//$pdo->deleteStudent($conn, 1);

