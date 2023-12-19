<?php
require("config.php");
require("checkSession.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="asset/dashboard.css?v=<?php echo time(); ?>">

<style>
    .center{
        margin-left:47%;
        font-size: 25px;
        display:flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height:80vh; 
    }
    @media (max-width:825px){
        .center{
            margin: 0;
            font-size: 25px;
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height:70vh;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 0%;
        }
    }
    @media (max-width:625px){
        .center{
            margin: 0;
            font-size: 20px;
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height:70vh;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 0px;
        }
    }
    @media (max-width:450px){
        .center{
            margin: 0;
            font-size: 15px;
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height:70vh;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 0px;
        }
    }
</style>
<title>ADD RECORDS</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"> <!--by clicking btn checkbox activated/checked, shows sidebar-->
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            <img src="asset/nia.png" alt="" style="height: 40px; width: 40px;">    
            <i class="logo">NIA</i>
        </label>
        
        <ul>
            <label >
                <a class="lv" href="dashboard.php">Home</a>
                <a class="lv" href="add.php">Add Records</a>
                <a class="lv" href="view.php">View Records</a>
            </label>
            <li><label class="text-light "><?php echo "Hi ".$_SESSION['ram']['name']; ?></label></li>
    
            <li><a href="logout.php" name="log-out" class="btn btn-danger">Logout</a> </li>
        </ul>
    </nav>
<!--<div class="jumbotron bg-secondary">
        <div class="container">
            <h1 class="display-4 text-danger"> Want to see??</h1>
            <p class="lead text-light">  The most wanted criminals in the city !</p>
        </div>
    </div> -->
    <section class="text-light ">
        <div class="center">
            <form action="file_upload.php" method="POST" enctype="multipart/form-data">
                <table>
                    <th colspan="2"><h2>Criminal Record Form</h2></th>
                    <tr>
                        <td><label for="">Full Name</label></td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td><label for="">Nickname</label></td>
                        <td><input type="text" name="n_name"></td>
                    </tr>
                    <tr>
                        <td><label for="">Gender</label></td>
                        <td><input type="radio" id="m" name="gender" value="Male" checked>Male<br>
                        <input type="radio" id="f" name="gender" value="Female">Female</td>
                    </tr>
                    <tr>
                        <td><label for="">Date of Birth</label></td>
                        <td><input type="date" name="dob"></td>
                    </tr>
                    <tr>
                        <td><label for="">Nationality </label></td>
                        <td><input type="text" name="nation"></td>
                    </tr>
                    <tr>
                        <td><label for="">Language</label></td>
                        <td><input type="text" name="lang"></td>
                    </tr>
                    <tr>
                        <td><label for="">Charges</label></td>
                        <td><input type="text-area" name="charge"></td>
                    </tr>
                    <tr>
                        <td><label for="">Picture</label></td>
                        <td><input type="file" name="ff"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" class="btn btn-danger"></td>
                        <td><input type="submit" name="ok" class="btn btn-success"></td>  
                    </tr>
                </table>
                
            </form>
        </div>
    </section>

    <!-- footer -->
    <div class="bg-dark text-light">
        <div class="container">
        <p style="text-align: center;">
            <br>
            All rights reserved.© Site is designed and hosted by 
            National Informatics Centre (NIC), Government of Bharat.
        </p>
        <br>
        </div>
    </div>
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

 
   

