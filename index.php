<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="asset/style.css?v=<?php echo time(); ?>">
<title>Home</title>
<style>
    .h{}
    .min{
        padding: 30px;
    }
    @media (max-width:825px){
        .h{
            font-size: 15px;
            color: white;
        }
        section{
            background: linear-gradient(#607274,#FAEED1);
            padding-bottom: 500px;
        }
    }
    @media (max-width:625px){
        .h{
            font-size: 15px;
            color: white;
        }
        section{
            background: linear-gradient(#607274,#5F0F40);
            padding-bottom: 850px;
        }
    }
    @media (max-width:300px){
        .h{
            font-size: 15px;
            color: white;
        }
        section{
            background: linear-gradient(#607274,#5F0F40);
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
            <li> <a href="" class="active">Home</a>   </li>
            <li><a href="register.php" name="reg" class="btn btn-warning">Register</a> </li>
            <li><a href="login.php" name="log" class="btn btn-success">Login</a> </li>
        </ul>
    </nav>
    
    <section>
        <div class=" min container text-light">
            <h3 class="h fw-bold">National Investigation Agency / জাতীয় তদন্ত সংস্থা</h3>
            <h5 class="h">Government of Bharat / ভারত সরকার </h5>
        </div>
        <div class="container text-light">
            <h3 class="h bg-warning">Our Vision</h3>
            <p>
            The National Investigation Agency aims to be a thoroughly professional investigative agency 
            matching the best international standards. The NIA aims to set the standards of excellence in 
            counter terrorism and other national security related investigations at the national level by 
            developing into a highly trained, partnership oriented workforce. NIA aims at creating deterrence 
            for existing and potential terrorist groups/individuals. It aims to develop as a storehouse of all 
            terrorist related information.
            </p>

            <h3 class="h bg-warning">Our Mission</h3>
            <p>
            In-depth professional investigation of scheduled offences using the latest scientific methods of investigation and setting up such standards as to ensure that all cases entrusted to the NIA are detected.
            Ensuring effective and speedy trial.
            Developing into a thoroughly professional, result oriented organization, upholding the constitution of India and Laws of the Land giving prime importance to the protection of Human Rights and dignity of the individual.
            Developing a professional work force through regular training and exposure to the best practices and procedures.
            Displaying scientific temper and progressive spirit while discharging the duties assigned.
            Inducting modern methods and latest technology in every sphere of activities of the agency.
            Maintaining professional and cordial relations with the governments of States and Union Territories and other law enforcement agencies in compliance of the legal provisions of the NIA Act.
            Assist all States and other investigating agencies in investigation of terrorist cases.
            
            </p>
        </div>
    </section>

    <!-- footeer -->
    <div class="bg-dark text-light">
        <div class="container">  
            <p>
                <br>
                Terms & Conditions | Privacy Policy | Copyright Policy | Hyperlinking Policy | 
                Accessibility | Help | Disclaimer | Sitemap | Useful Links <br>
                © Content Owned by National Investigation Agency, Government of Bharat.
                
            </p>
            <br>
        </div> 
    </div>
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

 
   

