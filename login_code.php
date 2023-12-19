<?php
require("config.php");
    if(isset($_POST['ok'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sql="Select * from officer where name='$name' AND email='$email'";
        $query=mysqli_query($con,$sql) or die(mysqli_error($con));
        
        if(mysqli_num_rows($query)>0){
            $arr=mysqli_fetch_assoc($query);
            $_SESSION['ram']=$arr;
            header('location:dashboard.php');            
        }else{
            header("location:login.php?err=Check credentials");
        }
        
    }

?>