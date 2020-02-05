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
        <title>Home</title>
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
    <div id="mySlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#mySlider" data-slide-to="0" class="active"></li>
    <li data-target="#mySlider" data-slide-to="1"></li>
    <li data-target="#mySlider" data-slide-to="2"></li>
    <li data-target="#mySlider" data-slide-to="3"></li>

  </ol>
  <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="Images/ll.jpg" alt="Picture 1">
              <div class="carousel-caption">
            </div>
            </div>
            <div class="item">
              <img src="Images/ll4.jpg" alt="Picture 2">
              <div class="carousel-caption">
            </div>
            </div>
            <div class="item">
              <img src="Images/ll.jpg" alt="Picture 2">
              <div class="carousel-caption">
            </div>
            </div>
            <div class="item">
              <img src="Images/ll4.jpg"  alt="Picture 2">
              <div class="carousel-caption">
            </div>
            </div>
      
  </div>
  <a class="left carousel-control" href="#mySlider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mySlider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
<!-- End Slide_Show-->


<!-- Start Slide_Show-->

<div class="PicsOFCandy text-center">
    <h2>Beautiful Candies</h2>
    <div class="row">
        <div class="pic1 col-sm-4">
            <h1>Chocolate</h1>
            <img src="img/Ch1.jpg" width="400" height="200">
        </div>

        <div class="pic2 col-sm-4">
            <h1>Lollipops </h1>
            <img src="img/Loli1.jpg" width="400" height="200">
        </div>

        <div class="pic3 col-sm-4">
            <h1>Sugar Free  </h1>
            <img src="img/S1.jpg" width="400" height="200">
        </div>
</div>

<!-- Start About-me-->
        <section class="about text-center"id="about" >
            <div class="container">
            
            <h1 class="hidden-xs">Know About Us <span>Bakery.</span></h1>
            <h3 class="visible-xs">Know About Us <span>Bakery.</span></h3>
            <p class="lead hidden-xs">The bakers began to prepare bread at home in an oven, using mills to grind grain into the flour for their breads. Therefore, in Paris, the first open-air bakery of baked goods was developed and since then, bakeries became a common place to purchase delicious goods and get together around the world.
            </p>
            
                <hr>
            <p class=" lead hidden-xs">On July 7, 1928, a bakery in Chillicothe, Missouri introduced pre-cut bread using the automatic bread-slicing machine, invented by Otto Frederick Rohwedder. While the bread initially failed to sell, due to its "sloppy" aesthetic, and the fact it went stale faster,[3] it later became popular. In World War II bread slicing machines were effectively banned, as the metal in them was required for wartime use. When they were requisitioned, creating 100 tonnes of metal alloy, the decision proved very unpopular with housewives.
            </p>
            
                <hr>
            </div>
        </section>
<!-- End About-me-->
<!-- start my skills -->
        
        <div class="my_skills"id="Our Skills">
            <div class="container">
                    <div class="skills">
                        
                        <h2>Our Skills</h2>
                         <p>if you have adream you must do your best if you have adream you must do yourif you have adream you must do your best if you have adream you must do your   </p>
                  <a href="#Order"><button>Contact Us </button></a>
                        
                </div>
                
            <div class="progressss">
               <div class="tec">
                <h3>Cakes</h3>
                   <div> <span style="width: 83%">83% &nbsp;</span> </div>
                
                </div>
                        
               <div class="tec">
                <h3>Bread</h3>
                   <div> <span style="width: 88%; background-color: blueviolet">88% &nbsp;</span> </div>
                
                
                </div>        
               <div class="tec">
                <h3>Pies</h3>
                   <div> <span style="width: 90% ;background-color: chartreuse ">90% &nbsp;</span> </div>
                
                
                </div>        
               <div class="tec">
                <h3>Pan Cackes</h3>
                   <div> <span style="width: 70% ;background-color:deeppink">70% &nbsp;</span> </div>
                </div>
                </div>
            </div>        
        </div>
        
        
<!-- end my skills -->        
        
<!-- start peoplesOpinion-->
        <div class="peoplesOpinion"id="Peoples Opinion">
                <div class="container">
                        <h2>People's Opinion</h2>
                    
                    <p>if you have adream you must do your best if you have adream you must do your you have adream you must do your best if you have adream you must do your  </p>
                    
                    
                    <button>Read More..</button>
            </div>
        </div>
        
<!-- end peoplesOpinion-->


<!-- Start TableofCandies-->
    <div class="titleTable ">
        <h1>List Of Candies Available</h1>
    </div>

    <div class="TableofCandies ">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Name OF Candy</th>
              <th scope="col">Type</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              

            </tr>
          </thead>
          <tbody>

            <?php

            include_once "Connection.php";

            $sqlCandy = "SELECT ID, Name, Type, Quantity, Price FROM candy";

            $resultCandy = $conn->query($sqlCandy);

                if ($resultCandy->num_rows > 0) {
                   
                    
                while($row = $resultCandy->fetch_assoc()) {
                         
                   echo "<tr>
                        <td>".$row["Name"]."</td>
                        <td>".$row["Type"]."</td>
                        <td>".$row["Quantity"]."</td>
                        <td>".$row["Price"]."</td>
                        <td><td><a href='AddToOrders.php?IDOr=".$row["ID"]."'><button type='button' class='btn bt-sm btn-info'>Add To Orders</button></a></td></td>
                        
                        <td><td><a href='viewCandy.php?IDCC=".$row["ID"]."'><button type='button' class='btn btn-info'>View</button></a></td></td>
                        </tr>";

                    }

                }

            ?>
            
          </tbody>
        </table>
    </div>



<!-- end TableofCandies-->

<!-- start TableofOrders-->


 <div class="titleTable text-center">
        <h1>List Of Orders</h1>
    </div>

    <div class="TableofCandies text-center">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Order Quantity</th>
              <th scope="col">Type</th>
              <th scope="col">Candy Name</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>

            <?php

            

            $sqlOrder = "SELECT * FROM orders";

            $resultOrder = $conn->query($sqlOrder);

                if ($resultOrder->num_rows > 0) {
                while($row = $resultOrder->fetch_assoc()) {
                    $Q = $row['OrderQuantity'];

                   echo "<tr>
                        <td>".$row['OrderQuantity']."</td>";
                        foreach ($resultCandy as $key) {
                            if($key['ID'] == $row['CandyId'] ){
                               print"<td>".$key['Type']."</td>";
                               print"<td>".$key['Name']."</td>";
                               print "<td>". $Q * $key['Price']."</td>";
                           }
                        }

                        print
                        "<td><a href='DeleteOrder.php?ID=".$row['IdOrder']."'><button type='button' class='btn btn-danger'>Delete</button></a></td>
                        </tr>";
                    }

                }

            ?>
            
          </tbody>
        </table>
    </div>

             <!-- end TableofOrders-->

       
     
        
  <!-- start contact me -->
        <div class="container" id="#Contact Us">
        <div class="contact">
        
                <div class="container">
            
                            <div class="infor">
                    
                        <h2>Countact Us</h2>
                                
                                <p>if you have adream you must do your best if you have adream you must do yourf you have adream you must do your best if you have adream youf you have adream you must do your best if you have adream you </p> 
                                <p>  
                                123 streat name <br>
                                    cairo <br>
                                    sksk aria 
                                </p>
                                
                                <p>
                                
                             <strong>Email:</strong> mariam@yahoo.com<br>
                            <strong>phone:</strong> 01111137744
                                </p>
                    
                    
                    </div>
            
            <form class="form">
                            <label>name * </label>
                           
                                <input type="text">                            
                                                
                                            <label>Email Adress * </label>
                           
                                <input type="text">                            
                                                
                
                                        <label>phone * </label>
                           
                                <input type="text">                            
                                                
                
                                        <label>message * </label>
                           
                                 <textarea></textarea>
                
            <input type="submit"value="submit">
            
                                   </form>
            
                                   </div>
        
        
        
        </div>
        
        
        </div>
        
   <!-- end contact me -->
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