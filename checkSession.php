<?php
    if(empty($_SESSION['ram'])){
        header("location:index.php?err=Login first");
    }
?>