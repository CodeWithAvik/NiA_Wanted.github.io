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
<title>Home</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
<style>
    .cd{
        margin:15px;
        padding: 5px;
    }
    .cd1{
        display: flex;
        flex-direction: row;
        text-align: center;
        justify-content: center;
    }

    @media (max-width:825px){
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 750px;
        }
    }
    @media (max-width:625px){
        
        .cd1{
            width: 100%;
            display: flex;
            flex-direction: row;
            text-align: center;
            justify-content: center;
        }
        .h{
            font-size: 15px;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 1000px;
        }
    }
    @media (max-width:450px){
        .cd{
            width:90%;
            margin: 25px;
            padding: 10px;
        }
        .cd1{
            width: 100%;
            margin: 0;
            padding: 0;
            /* flex-direction: column;
            text-align: center;
            justify-content: left; */
        }
        .h{
            font-size: 15px;
        }
        section{
            background: linear-gradient(#392467,#4CB9E7);
            padding-bottom: 1200px;
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
            <label>
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
    <section class="text-light">
        <div class="container"><br>
            <h1 class="h"><?php echo "Namoskar🙏 ".$_SESSION['ram']['name']; ?></h1>
        </div><br>
        
        <div class="row cd1">
        <h3 class="h">Highlights</h3>
            <div class="cd col-3 text-dark bg-secondary ">
                <div class="card-header border-0 bg-white">
                    <h4 class="card-title">AI-voice cloning</h4>
                </div>
                <div class="card-body">
                    <p class="card-text text-light">
                    Delhi: Cyber thugs dupe man by using AI-voice cloning technology to fake 
                    his relative's kidnapping.
                    Forensic psychologists apply the theories of psychology to the various 
                    aspects of crime, intending to understand areas such as offender psychology.
                    </p>
                </div>  
            </div>
            
            <div class="cd col-3 text-dark bg-secondary">
                <div class="card-header border-0 bg-white">
                    <h4 class="card-title">Seized 1.3 kg Gold</h4>
                </div>
                <div class="card-body">
                    <p class="card-text text-light">
                    Flyer held at Goa airport for possessing gold worth Rs 66 lakh.
                    DRI seized 1.3 kg of gold worth Rs 66 lakh from the accused.
                    Male citizens of India are allowed to enter the country with up to 20 grammes 
                    of duty-free gold worth a maximum of Rs 50,000 (SGD 800).
                    </p>
                </div>  
            </div>
            
            <div class="cd col-3 text-dark bg-secondary">
                <div class="card-header border-0 bg-white">
                    <h4 class="card-title"> Armyman kills</h4>
                </div>
                <div class="card-body">
                    <p class="card-text text-light">
                    Ex-Armyman kills wife and daughter, ends life on tracks.
                    A 48-year-old former Armyman allegedly slit the throats of his 45-year-old 
                    wife and 19-year-old daughter in their Dum Dum flat before jumping in front 
                    of a speeding train near Madhyamgram railway station on Friday morning.
                    </p>
                </div>  
            </div>
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

 
   

