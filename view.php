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
<link rel="stylesheet" href="asset/dashboard.css?v=<?php echo time(); ?>">
<style>
    .center{
        width: 100%;
        margin:0;
        font-size: 20px;
        display:flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height:60vh;
    }
    .tb{

    }
    .dv img{
        height: 80px;
        width: 80px;
        border-radius: 5px;
    }
    
    @media (max-width:825px){
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
<title>View Records</title>
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
    <section class="text-light">
        <div class="center dv">

        <?php
            $page=$_GET['page'];
            if($page=="" || $page=="1"){
                $page1=0;
            }
            else{
                $page1=($page*4)-4;
            }

            $sql="SELECT * FROM criminal limit $page1,4";
            $query=mysqli_query($con,$sql) or die(mysqli_error($con));
            if(mysqli_num_rows($query)>0){
                ?>
                <table class="table table-hover text-light">
                    <thead>
                    <tr class="h3 text-light">
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Nationality</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($rs=mysqli_fetch_assoc($query)){
                    ?>
                    <tr class="fw-bold">
                        <td> 
                            <div class="dv"><img src="upload/<?php echo $rs['img_url'] ?>" alt="img"></div>
                        </td>
                        <td><?php echo $rs['fname']?></td>
                        <td><?php echo $rs['gender']?></td>
                        <td><?php echo $rs['nationality']?></td>
                        <td>
                            <a href="update.php?id=<?php echo $rs['id'] ?>" ><i class="fas fa-edit text-light" title="Edit"></i></a>&nbsp;&nbsp;
                            <a href="delete.php?id=<?php echo $rs['id'] ?> " ><i class="fas fa-trash text-light" title="Delete"></i></a>&nbsp;&nbsp;
                            <a href="about.php?id=<?php echo $rs['id'] ?> " ><i class="fas fa-eye text-light" title="See Details"></i></a>
                        </td>
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


        <!-- this is count no. of pages -->
        <?php
            $sql1="SELECT * FROM criminal";
            $query1=mysqli_query($con,$sql1) or die(mysqli_error($con));

            $res=mysqli_num_rows($query1);
            //echo $res;

            $a=$res/4;
            $a=ceil($a);

            for($b=1;$b<=$a;$b++){
                ?>
                    
                    <a href="view.php?page=<?php echo $b; ?>" style="text-decoration: none;border: 2px solid white;border-radius:5px;font-size:30px;margin:10px;padding:5px;" class="text-light fw-bold"><?php echo $b." " ?></a> 
                    
                <?php
            }
        ?>
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




