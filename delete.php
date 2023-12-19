<?php
    require("config.php");
    $id=$_GET['id'];

    $sql1="DELETE FROM criminal WHERE id=$id";
    $res1=mysqli_query($con,$sql1) or die(mysqli_error($con));
    $row=mysqli_fetch_assoc($res1);

    // echo "<pre>";
    // print_r($row);
    // echo "<pre>";

    

    unlink($row["upload/".'$img_url']);

    $sql="DELETE FROM criminal WHERE id=$id";
    $res=mysqli_query($con,$sql) or die(mysqli_error($con));
    
    if($res==1){
        header("location:view.php?msg=Delete_Successful");
    }  
    else{
        header("location:view.php?msg=Delete_Unsuccessful");
    } 
    
    
?>