<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log In </title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container">
        <div class="form login">
            <div class="form-content">
                <div class="formHeader">Login</div>

                    <!-- Login form start here -->
                    <form action="#" method="POST" >
                        <div class="field input-field">
                            <input type="text" name="email" placeholder="Enter Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <input type="submit" name="submit" value="Login" class="button-field">
                        </div>
                       
                        <br><br>
                    </form>
                    <!-- Login form end here -->

                <div class="form-link">
                    <span>Don't have an account? <a href="Signup.html">Signup</a></span>
                </div>
            </div>

        </div>

    </section>

    <script src="js/script.js"></script>
</body>
</html>

<?php
$serverName='localhost';
$userName='root';
$password="";
$db_Name='shop';

$con=new mysqli("$serverName", "$userName", "$password", "$db_Name");

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password =$_POST['password'];
    }
    
    $sql = "SELECT * FROM tbl_admin WHERE email= '$email' AND password='$password'";
    $res= mysqli_query($conn, $sql);

    if($res){
        if($res && mysqli_num_rows($res)>0){
            echo 'success';
            header("location:../signup.php");
            die;
        }
    echo "wrong";
    }
?>