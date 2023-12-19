<?php
    require("config.php");
    require("checkSession.php");
    
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
<link rel="stylesheet" href="asset/dashboard.css">
<title>About</title>
<style>
    .center{
        width: 100%;
        /* margin-left:47%; */
        font-size: 20px;
        display:flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        min-height:80vh;
    }
    .dv img{
        height: 150px;
        width: 150px;
        border-radius: 5px;
    }
    .black{
        color: whitesmoke;
    }
    @media (max-width:825px){
        .black{
            color:black;
        }
        .center{
            width: 100%;
            margin: 0;
            font-size: 25px;
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height:60vh;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 0%;
        }
    }
    @media (max-width:625px){
        .black{
            color:black;
        }
        .center{
            width: 100%;
            margin: 0;
            font-size: 20px;
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height:50vh;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 0px;
        }
    }
    @media (max-width:450px){
        .black{
            color:black;
        }
        .dv img{
            height: 50px;
            width: 50px;
            border-radius: 5px;
        }
        .h3{
            font-size: 15px;
            font-weight: bold;
        }
        .center{
            width: 100%;
            margin: 0;
            font-size: 12px;
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height:40vh;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 0px;
        }
    }
</style>
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
    <section>
        <div class="text-light center">
            <?php
                $id=$_GET['id'];
                $sql="SELECT * FROM criminal where id=$id";
                $query=mysqli_query($con,$sql) or die(mysqli_error($con));
                if(mysqli_num_rows($query)>0){
                    ?>
                    <table class="text-light">
                        <tbody>
                        <?php
                        while($rs=mysqli_fetch_assoc($query)){
                        ?>
                        <tr class="fw-bold">
                            <td> 
                                <div class="dv"><img src="upload/<?php echo $rs['img_url'] ?>" alt="img"></div>
                            </td>
                        </tr>
                        <tr class="fw-bold">
                            <th class="h4 black">Full Name</th>
                            <td><?php echo $rs['fname']?></td>
                        </tr>
                        <tr class="fw-bold">
                            <th class="h4 black">Nick Name</th>
                            <td><?php echo $rs['nickname']?></td>
                        </tr>
                        <tr class="fw-bold">
                            <th class="h4 black">Gender</th>
                            <td><?php echo $rs['gender']?></td>
                        </tr>
                        <tr class="fw-bold">
                            <th class="h4 black">Date of Birth</th>
                            <td><?php echo $rs['dob']?></td>
                        </tr>
                        <tr class="fw-bold">
                            <th class="h4 black">Nationality</th>
                            <td><?php echo $rs['nationality']?></td>
                        </tr>
                        <tr class="fw-bold">
                            <th class="h4 black">Language</th>
                            <td><?php echo $rs['language']?></td>
                        </tr>
                        <tr class="fw-bold">
                            <th class="h4 black">Charges</th>
                            <td><?php echo $rs['charges']?></td>  
                        </tr>
                        <?php

                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                }
            ?>
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