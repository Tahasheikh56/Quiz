<?php
session_start();
class connect{

    public $con;

    public function __construct(){
        $this->con=mysqli_connect("localhost", "root" ,"" ,"qiuz");
        if($this->con){
        // echo "connected";
        }else{
        
        
          echo "not connected";
        }
          }

          public function dataquery($query){
          return  $this->con->query($query);
    }

    public function login($email,$password){
      $query = "select *from registration where email = '$email' AND password = '$password'";
      $query2 = $this->con->query($query);
      if($query2 -> num_rows > 0){
        while($row = mysqli_fetch_assoc($query2)){
          $_SESSION["id"] = $row["id"];
          $_SESSION["name"] = $row["name"];
          $_SESSION["email"] = $row["email"];
          $_SESSION["pass"] = $row["password"];
  }
  header("Location:index.php");
      } else{
       echo "<script>alert('Wrong attempt please try again...');</script>";
      }
}

}
$obj = new connect;
?>