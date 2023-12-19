<?php
    require("config.php");
    $name=$_POST['name'];
    $nname=$_POST['n_name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $nation=$_POST['nation'];
    $lang=$_POST['lang'];
    $charge=$_POST['charge'];
    $fname=$_FILES['ff']['name'];
    // $ftype=$_FILES['ff']['types'];
    $fsize=$_FILES['ff']['size'];
    $tmp=$_FILES['ff']['tmp_name'];

    $img_url=uniqid(true)."_".$fname;
    $file_location="upload/".$img_url;

    $ss=move_uploaded_file($tmp,$file_location);
    $sql="Insert into criminal (fname,nickname,gender,dob,nationality,language,charges,img_url) 
            values ('$name','$nname','$gender','$dob','$nation','$lang','$charge','$img_url')";
    $query=mysqli_query($con,$sql) or die(mysqli_error($con));
    
    if($ss==1){
        header("location:add.php?msg=File_upload_Successfull");
    }
    else{
        header("location:add.php?msg=Unable_to_upload_file");
    }


?>