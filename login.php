<?php
$logged = 0;
$invalid = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "server.php";
    $name = $_POST['Name'];
    $password=$_POST['Password'];
    $sql = "SELECT * FROM info WHERE Name = '$name' AND Password='$password'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $logged=1;
            session_start();
            $_SESSION['Name']=$name;
            header('location:doctors.php');
            
        }else{
            $invalid=1;
        }
    
    } 
}
?>
<script>
        function formValidation() {
    let name = document.forms["form"]["Name"].value;
    let password = document.forms["form"]["Password"].value; 
    if (name == "" || password == "") {
        alert("All fields must be filled!");
        return false;
    }
}

    </script>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="stylesign.css">
    

</head>
<body>
     <?php
    if($invalid){
    echo "Invalid";
    }
    ?>
    <?php
    if($logged){
        echo "Logged in";
    }
    ?>
  
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST" name="form" id="form" onsubmit="return formValidation()">
            <input type="text" name="Name" placeholder="Enter Username">
            <input type="password" name="Password" placeholder="Enter Password">
            <input type="submit" name="submit" id="submit" value="login">
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>

    
    
        
</body>
</html>