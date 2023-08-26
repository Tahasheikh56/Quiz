<?php
session_start();
class connection {
    private $host = "localhost";
    private $un = "root";
    private $pass = "";
    private $db = "rgistration";
    public $con;

    public function __construct(){
        $this->con = new mysqli ($this->host,$this->un,$this->pass,$this->db);
        if($this->con->connect_error){
            die("Not connected".$this->con->connect_error);
        }
    }

    public function query($query){
       return $this->con->query($query);
    }

    public function login($email,$pass){
        $data = "select *from student where Email='$email' AND Password='$pass'";
        $query = $this->con->query($data);
        if($query->num_rows > 0){
            $row = mysqli_fetch_assoc($query);
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["Name"];
                $_SESSION["email"] = $row["Email"];
                $_SESSION["pass"] = $row["Password"];
                $_SESSION["img"] = $row["image"];
        }
    }
}
$obj = new connection();
?>