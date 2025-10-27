<?php
$registered = 0;
$userexist = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'server.php';
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password=$_POST['Password'];
    $sql = "SELECT * FROM info WHERE Name = '$name'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $userexist=1;
        }else{
            $sql = "INSERT INTO info (Name,Email, Password) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($conn,$sql);
            if($result){
                $registered=1;
            }else{
                die(mysqli_error($conn));
            }
        }
    }
}
?>

   
    

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - MediConnect</title>
    <link rel="stylesheet" href="stylesign.css">
    <script>
        function formValidation() {
    let name = document.forms["form"]["Name"].value;
    let email = document.forms["form"]["Email"].value;
    let password = document.forms["form"]["Password"].value; 
    if (name == "" || email == "" || password == "") {
        alert("All fields must be filled!");
        return false;
    }
}

</script>
</head>
<body>
    <div class="container">
        <h2>Sign-Up</h2>
        <form action="signup.php" method="POST" id="form" name="form" onsubmit="return formValidation()">


            <input type="text" name="Name"  placeholder="Full Name" >
            <input type="email" name="Email"  placeholder="Email" >
            <input type="password" name="Password" placeholder="Password" >
            <button type="submit" class="btn btn-success">Sign Up</button>

        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
   <?php
   if($userexist){
    echo "Username already exists";
   }
   ?>
   <?php
   if($registered){
    echo "New username registered";
   }
   ?>
</body>
</html>
