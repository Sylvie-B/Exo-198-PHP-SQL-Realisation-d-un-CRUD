<?php


class DbObj
{
    private string $server;
    private string $database;
    private string $user;
    private string $pass;

    public function __construct()
    {
        $this->server='localhost';
        $this->database='exo198';
        $this->user = 'root';
        $this->pass = '';
    }

    public function connect(): ?PDO {
        try {
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database;charset=utf8", $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }
        catch (PDOException $exception){
            echo "data base connexion error : ".$exception->getMessage();
            return null;
        }
        return $conn;
    }

    public function addStudent ($pdo, string $nom, string $prenom, int $age)
    {
        try{
            $sql = "
                INSERT INTO exo198.eleve (nom, prenom, age)
                VALUES ('$nom', '$prenom', '$age')
            ";

            return $pdo->exec($sql);
        }
        catch (PDOException $exception){
            echo "add student error : ".$exception->getMessage();
        }
    }

    public function readList ($pdo)
    {
        try{
            $stmt = $pdo->prepare("SELECT * from exo198.eleve");
            $state = $stmt->execute();
            if ($state) {
                foreach ($stmt->fetchAll() as $student)
                echo "<div id='list'>".$student['id']." ".$student['nom']." ".$student['prenom']." ".$student['age']." ans</div>";
            }
        }
        catch (PDOException $exception){
            echo "list reading error : ".$exception->getMessage();
        }
    }

    public function updateStudent ($pdo, string $prenom, string $nom, int $age, int $id) {

        $stmt = $pdo->prepare("UPDATE exo198.eleve SET prenom = :prenom, nom = :nom, age = :age WHERE id = :id");

        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo 'update <br>';
        }
        else {
            echo 'no update <br>';
        }

    }

    public function deleteStudent ($pdo, int $id) {
        try {
            $sql = "DELETE FROM exo198.eleve WHERE id = $id";

            if ($pdo->exec($sql) !== false){
                echo "entrée supprimée";
            }
        }
        catch (PDOException $exception){
            echo "delete failed : ".$exception->getMessage();
        }
    }
}
