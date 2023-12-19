<?php
    require("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="asset/log_style.css?v=<?php echo time(); ?>">

<title>Register</title>
</head>
<body>

    <form action="" name="frm" method="post">
        <!-- <input type="text" name="name"  required>
        <input type="email" name="email"  required>
        <input type="submit" name="ok" value="Register"> -->
        <div class="wrapper">
            <div class="login_box">
                <div class="login_header">
                    <span>Register</span>
                </div>

                <div class="input_box">
                    <input type="text" id="user" name="name" class="input-field" required>
                    <label for="user" class="label">Username</label>
                    <i class='fas fa-user-alt icon'></i>
                </div>

                <div class="input_box">
                    <input type="email" id="pass" name="email" class="input-field" required>
                    <label for="email" class="label">Email</label>
                    <i class='fas fa-lock icon'></i>
                </div>

                <!-- <div class="remember-forgot">
                    <div class="remeber-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Rememeber Me</label>
                    </div>

                    <div class="forgot">
                        <a href="">Forgot password?</a>
                    </div>
                </div>  -->

                <div class="input_box">
                    <input type="submit" name="ok" class="input-submit" value="Register">
                </div>

                <div class="register">
                    <span>Want to login?<a href="login.php">Login</a></span>
                </div>
            </div>
        </div>

    </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    if(isset($_POST['ok'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        
        $sql="INSERT INTO officer(name,email) VALUES('$name','$email')";
        $query=mysqli_query($con,$sql) or die(mysqli_error($con));

        if($query==1){
        ?>
            <div class="alert alert-success">
                Registration Successful
            </div>
        <?php
        }
        else{
            ?>
            <div class="alert alert-danger">
                Registration Unsuccessful
            </div>
            <?php
        }
        
            
    }


?>