<?php
      include("connect.php");
    if(isset($_SESSION["name"])){
?>
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

    <!-- header section -->
    <div class="container col-lg-8 m-auto d-block">
        <h1 class="text-center m-5 d-flex"> <span class="text-white bg-primary me-2">BURAQ TECH </span> WEB DEVELOPER QUIZ <a type="submit" class="btn btn-danger ms-5 p-2" href="logout.php">Logout</a></h1>

        <h4 class="text-center"><span class="text-primary"><?php echo $_SESSION["name"];?></span> Welcome to buraq tech quiz</h5>

        <div class="card mt-5">
            <h5 class="text-center"> <?php echo $_SESSION["name"];?> you have to select only one out of 4, best of luck!!</h3>   
       </div>     
       <br>
       
<!-- question section -->

<form action="check.php" method="post">
       <?php
for($i=1; $i<6; $i++){



 
$q = "select * from questions where qid='$i'";
$query = $obj->dataquery($q);
while($row = mysqli_fetch_assoc($query)){
       ?>


<div class="card">
    <h4 class="card-header"><?php echo $row["question"]; ?></h4>

</div>
<?php }?>


<!-- answer section -->

<?php
$q= "select *from answers where ans_id ='$i'";
$query = $obj->dataquery($q);
while($rows = mysqli_fetch_assoc($query)){
    ?>
<div class="card-body">
<input type="radio" name="quizcheck[<?php echo $rows["ans_id"]?>]" value="<?php echo $rows["aid"];?>"> 
<?php echo $rows["answer"] ?>
</div>

<?php
} }
?>



<input type="submit" name="submit" value="submit" class="btn btn-primary w-100 mt-1">
</form>


    </div>
</body>
</html>

<?php 
}else{
header("Location:login.php");
}
?>