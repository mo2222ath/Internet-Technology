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
        <title>Lollipops</title>
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
            <h1>Lollipops</h1>
            <img src="img/LO.jpg" width="400" >
        </div>
    </div>
</div>

<div class="PicsOFCandy text-center">
  <br><br>
    <p style="margin: 30px;">
      Being a sucker isn't a bad thing. And in our delicious and incredible lollipop and suckers section, you'll taste exactly why. From assorted flavor and color lollies, to Charms Pops, Blow Pops, and so many more delicious candies on a stick, you'll be able to enjoy these suckers for hours and hours. Bring some of the candies home from our bulk lollipop and suckers section for your next party. They even make a great addition to candy bouquets, candy buffet bars, gift baskets, or are a great type of sweet to keep around the house and snack on when you please. Try some of our delicious lollipops and suckers today and you'll fall in love.
    </p>
    <br><br>
</div>

<div class="row">
  <div class="col-sm-4">
    <img src="img/L1.jpg">
    <h4  style="font-family: cursive;">Bulk Assorted Fruit   </h4><br>
  </div>
  <div class="col-sm-4">
    <img src="img/L2.jpg">
    <h4 style="font-family: cursive;">Jolly Rancher Lollipops     </h4><br>
  </div>
  <div class="col-sm-4">
    <img src="img/L3.jpg">
    <h4 style="font-family: cursive;">Rainbow Whirly Pops   </h4><br>
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