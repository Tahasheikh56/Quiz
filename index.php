<?php
include("config.php");
if(isset($_SESSION["name"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
         
            <!-- header section // -->
            <div class="col-md-8">
            <div class="container m-auto d-block">
        <h1 class="text-center mt-4"> <span class="text-white bg-primary me-2">BURAQ TECH </span> WEB DEVELOPER QUIZ</h1>

        <h4 class="text-center mt-3"><span class="text-primary"><?php echo $_SESSION["name"]; ?></span> Welcome to Buraq tech quiz</h5>

        <div class="card mt-3">
            <h5 class="text-center"> <?php echo $_SESSION["name"]; ?> you have to select only one out of 4, best of luck!!</h3>   
       </div>  
                </div>    
    

    <!-- question section -->
    <form action="check.php" method="post">
        <div class="card mt-3">
            <?php
            for($i = 1; $i < 7; $i++){
            $q = "select * from questions where qid = '$i'";
            $query = $obj->query($q);
            while($row = mysqli_fetch_assoc($query)){
            ?>
            <div class="card-header"><?php echo $i.") ".$row["question"]; ?></div>

         <!-- answer section -->

            <?php
            $q = "select * from answers  where options_answer_id = '$i'";
            $query = $obj->query($q);
            while($row = mysqli_fetch_assoc($query)){
            ?>
             <div class="card-body">
            <input type="radio" name="quiz[<?php echo $row["options_answer_id"]; ?>]" value="<?php echo $row["aid"]; ?>" id="">
            <?php echo $row["answers"]; ?>
            </div>
            <?php } } }?>
        </div>
        <br>
        <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        <br>
        </div>
    </form>
    </div>
    </div>

    <div class="col-md-2"></div>
</body>
</html>
<?php 
} 
else{
    header("Location:login.php");
}
?>