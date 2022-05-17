
<?php
   // Initialize the session
   session_start();
   
   ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amader Shop</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500;600;700&display=swap" rel="stylesheet">
        <link href="demo.css" rel="stylesheet"></link>
         <link href="Extra Css/product.css" rel="stylesheet"></link>
         <script src="script.js"></script>



    </head>

    <body style="background-color:#e6e6e6;">
 
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img   src="image/logo.png" width="80px">

                </div>

                <nav>

                      <ul id="MenuItems">


                        <li><a href="index.php" style="color: #0074D9;">Home</a></li>

                        <li><a href="Products.php"style="color: #0074D9;" >Shop Now</a></li>


                        <li><a href="AboutUs.php" style="color: #0074D9;" >About</a></li>
                        <li><a href="contact.php"style="color: #0074D9;" >Contact</a></li>
                        <li><a href="account.php" style="color: #0074D9;" >Account</a></li>
                        
                    </ul>
                </nav>

             

                <img src="image/cart.png" width="25px" height="25px">


       <div class="search">
                    <form method="post" action="search.php" class="h-search" id="h-search">
                        <input type="text" placeholder=" Khujo "name="search">
                        <button>
                            <i class="fa fa-search" style="font-size: 10px;">
                    </i>
                </button>
            </form>
        </div>

        
            </div>
        </div>
    </div>
  

          <div  class="account-page">
              <div class="container">
                  <div class="row">
                      <div class="col-2">
                          <img src="image/gaming.jpg" width="100%">
                      </div>

                      <div class="col-2">
                          <div class="form-container">
                              <div class="form-btn">
                                  <span onclick="login()">Login</span>
                                  <span onclick="register()">Register</span>
                                  <hr id="indicator">
                              </div>
                              <form action="login.php" method="post" class="form-control" id="LoginForm" required>
                                  <input type="text" name="user" placeholder="Username">
                                  <input type="password" name="password"  placeholder="Password" required>
                                  <button type="submit" class="btn">Login</button>
                                  <a href="">Forgot password</a>
                              </form>
                              <form  action="insert.php" method="post" id="RegForm">
                              <input type="text" class="form-control mb-2" placeholder="Username" name="name"> 
                            <input type="email" class="form-control mb-2" placeholder="Email" name="email"> 
                            <input type="text" class="form-control mb-2" placeholder="AGE" name="age"> 
                            <input type="text" class="form-control mb-2" placeholder="Password" name="password"> 
                            <button class="btn btn-primary" name="submit">Submit</button>

                            </form>
                          </div>

                      </div>

                  </div>

              </div>

          </div>

             <div class="footer">
            <div class="row">

                 <div class="footer_0">
                     <img src="image/logo.png" width="80">
                    <h3>Amader Shop</h3>
                   
                
                </div>
               

                <div class="footer_1">
                    <h3> Project Of cse482</h>
                    
                    <p>Best price for buying</p>

                </div>
                
               
            </div>
            
        </div>

        <!---JS for toggle menu-->

        <script>
            var MenuItems= document.getElementById("MenuItems")
            MenuItems.style.maxHeight="0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight=="0px")
                {
                    MenuItems.style.maxHeight="200px";
                }
                else
                {
                    MenuItems.style.maxHeight="0px";
                }
            }
        </script>

        
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(100px)";
    }
    function login(){
        RegForm.style.transform="translateX(300px)";
        LoginForm.style.transform="translateX(300px)";
        Indicator.style.transform="translateX(0px)";
    }
</script>

    </body>

</html>