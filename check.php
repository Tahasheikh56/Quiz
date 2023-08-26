<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
include("config.php");
error_reporting(0);
$result = 0;
$i = 1;
if(isset($_POST["submit"])){
    if(!empty($_POST["quiz"])){
        $count = count($_POST["quiz"]);
        $selected = $_POST["quiz"];
        $q = "select * from questions";
        $query = $obj->query($q);
        while($row = mysqli_fetch_assoc($query)){
            $ans = ($row["correct_answer_id"]);
            $checked = $ans == $selected[$i] ;
            if($checked){
                $result++;
            }
            $i++;
        }

?>

    <div class="container">
    <h1 class="text-center m-5"> <span class=" rounded text-center m-5 text-white bg-primary p-1 me-2">BURAQ TECH </span> WEB DEVELOPER QUIZ</h1>
    <h1 class="text-center bg-dark text-white">RESULT</h1>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Attempt Question</th>
            <th class="text-center"><?php echo "Out of 6, You  have Selected ".$count." Option "; ?></th>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>Total Score</td>
                <td><?php echo $_SESSION["name"]." Your Score is ".$result; ?></td>
                <br>
            </tr>
        </tbody>
    </table>
    <a  href="logout.php" ><input type="submit" value="Logout" class="btn btn-primary form-control mt-3"></a>

    <?php  }  } 
    $id = $_SESSION["id"];
    $name = $_SESSION["name"];
    $q = "insert into marksheet value('','$id','$name','5','$count')";
    $obj->query($q);
    ?>

</body>
</html>