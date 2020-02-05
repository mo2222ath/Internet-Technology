<?php
session_start();
if(isset($_SESSION['username']))
{

?>



<html>
    <head>

        <meta charset="UTF-8"/>
        <!-- internet explorer Meta-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--meta for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sugar Free</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/Style.css">
        <!-- 1- Only for internet explorer-->
        <!-- 2- Media Queries-- >
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>     
          <script src="js/respond.min.js"></script>              
        <![endif]--> 
    </head>
    <body>
<!-- Start Navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="NavHeader  navbar-brand" href="#"><span >C</span>andy</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="#">Home</a></li>
                <li><a href="#about">About US</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candies<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#page1">Chocolate</a></li>
                    <li><a href="#page2">Lollipops</a></li>
                    <li><a href="#page3">Sugar Free</a></li>

                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Branches<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#Our Skills">Our Skills</a></li>
                    <li><a href="#Peoples Opinion">Peoples Opinion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#Our Branches">Our Branches</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#Our Branches OutSide">Our Branches OutSide</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#Contact Us">Contact Us</a></li>
                  </ul>
                </li>
                <li><a href="Sign_in_Up/LogOut.php" style="color: white">LogOut</a></li>
                <li><a href="#" style="color: white"><?php print $_SESSION['username']  ?></a></li>
              </ul>
            </div>
          </div><!-- End of the container -->
        </nav>
<!-- End Navbar-->
<!-- Start Slide_Show-->


<div class="PicsOFCandy text-center">
    <h2>Beautiful Candies</h2>
    <div class="row">
        <div class="pic1 col-sm-12">
            <h1>Sugar Free</h1>
            <img src="img/SU.jpg" width="400" >
        </div>
    </div>
</div>

<div class="PicsOFCandy text-center">
  <br><br>
    <p style="margin: 30px;">
      Who every said you had to skimp on flavor in order to stay sugar free? Well, however it is sure was wrong and our huge and flavor packed section of sugar free treats are here to prove that sugar free doesn't have to be flavor free too! With amazing sugar free candies like peppermints, coffee flavored after dinner candies, fruit chews, lollipops, and so much more, you'll be able to indulge without feeling guilty or sacrificing delicious flavor. If you love sweets but don't want to pump your body full of sugar, then this is the section for you. Stock up on delicious and affordable bulk sizes today and keep your pantry and stomach full of yummy and sugar free treats.
    </p>
    <br><br>
</div>

<div class="row">
  <div class="col-sm-4">
    <img src="img/F1.jpg">
    <h4  style="font-family: cursive;">Sugar Free Starlight Mints      </h4><br>
  </div>
  <div class="col-sm-4">
    <img src="img/F2.jpg">
    <h4 style="font-family: cursive;">Black Licorice Bears     </h4><br>
  </div>
  <div class="col-sm-4">
    <img src="img/F3.jpg">
    <h4 style="font-family: cursive;">Hershey's Sugar Free Milk Chocolate Bars  </h4><br>
  </div>
  
  
</div>





<!-- start footer -->
        
        
        <div class="footer">
        
            <div class="container">
 
        

                  <span>copyright &copy; 2018 Tro Tro </span>  
                
                <ul>
                
                <li> <img src="Images/if_facebook_313485.png">    </li>
                <li> <img src="Images/if_heart_115727.png">    </li>
                <li> <img  src="Images/if_facebook_circle_gray_107140.png">    </li>
                <li> <img src="Images/if_online_social_media_twitter_734377.png">    </li>
                
                
                
                
                </ul>
            
            </div>
        
        
        
        
        </div>
<!-- end footer -->


        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

<?php
}else{
    header("location:Sign_in_Up/login.php");
    die();
}


?>