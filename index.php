<?php
$insert = false;
if(isset($_POST['name'])){


$server = "localhost";
$username = "root";
$password ="";
$con = mysqli_connect($server, $username, $password);
if(!$con){
 die("connection to this database failed due to".mysqli_connect_error());
}
//echo "success connecting to the db";
$name = $_POST['name'];
$gender= $_POST['gender'];
$age= $_POST['age'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$desc= $_POST['desc'];
$sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name',  '$age','$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
//for executing the data

if($con->query($sql) == true){
   // echo "successfully inserted";
   $insert = true;

}
else{
    echo "ERROR: $sql  <br> $con->error";
    
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="UIIT">
    <div class="container">
        <h1>
            Welcome to UIIT
        </h1>
        <p>
            Enter your detail and submit this form to conform your participation in the trip
        </p>
        <?php
        if($insert == true){
        echo "<p class'submit'>Thanks for submitting your form. we are happy to see you joining us for the US trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
   <!--INSERT INTO `trip` (`SRNO.`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testname', '23', 'female', 'this@gmail.com', '1234567890', 'first ever php my admin msg', current_timestamp());-->
</body>
</html>