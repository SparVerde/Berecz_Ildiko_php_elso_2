<?php
require_once "Regisztralt.php";
class Adatbazis
{
    private $host    = "localhost";
    private $user    = "root";
    private $pass    = "";
    private $db_name = "php_elso_dolgozat";
    private $conn;

   
    public function __construct()
    {
        $this->kapcsolodas();
    }

    private function kapcsolodas()
    {
        
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        $this->conn->set_charset("utf8");
        if ($this->conn->connect_error) {
            die($this->conn->connect_error);
        } else{
            //echo "Sikeres kapcsolódás";
        }
    }
    
    public function regisztracio($regisztralt)
    {
        $sql = 
        "INSERT INTO `tomegkozlekedesi_eszkozok`(`Rendszam`, `Gyarto`, `Vizsgaztatva`, `Tipus`, `Uzembehelyezes`, `Ulohely`)
        VALUES (?,?,?,?,?,?)
        ";
        $stmt = $this->conn->prepare($sql);


        $stmt->bind_param("ssssss",
         $regisztralt->Rendszam,
         $regisztralt->Gyarto,
         $regisztralt->Vizsgaztatva,
         $regisztralt->Tipus,
         $regisztralt->Uzembehelyezes,
         $regisztralt->Ulohely);
        $stmt->execute();
    }

    public function tomegkozlekedesi_eszkozok_lekerdezese()
    {
        $sql = "SELECT * FROM `tomegkozlekedesi_eszkozok`";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    
    public function __destruct()
    {
        $this->conn->close();
        //echo "Destruct";
    }

}

