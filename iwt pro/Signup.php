
<?php

$con=new mysqli("localhost", "root", "", "shop");

if($con->connect_error){
    die("connection_error".$con->connect_error);
}
else{ 
    $SELECT="SELECT email FROM tbl_admin WHERE email = ? Limit 1";
    echo("Already have a Mail");
}
if(isset($_POST['submit']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']))
{
    $qry="INSERT INTO tbl_admin(firstName,lastName,email,password,password2) VALUES( '".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['email']."','".$_POST['password']."','".$_POST['password2']."')";


    if($con->query($qry) ===TRUE){
         echo "Account Created";
    }
    else{
        echo "Acoount Created Failed";
    }
}


    mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container">
        <div class="form signup">
            <div class="form-content">
                <div class="formHeader">Signup</div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                    <div class="field input-field">
                        <input type="text" placeholder="First Name" name="firstName" class="input" required="">
                    </div>
                    <div class="field input-field">
                        <input type="text" placeholder="Last Name" name="lastName" class="input"   required="">
                    </div>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" name="email" class="input" required="">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Create password" name="password" class="password"  required="">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm password" name="password2" class="password"  required="">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <input type="submit" name="submit">
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="login.html">Login</a></span>
                </div>
            </div>

        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>



