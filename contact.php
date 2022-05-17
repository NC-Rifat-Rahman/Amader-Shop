
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
         <link href="Extra Css/contact.css" rel="stylesheet"></link>



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
  

          <div  class="Contact US">
              <div class="container">
                  <div class="row">
                      



                      <div class="col-2" >

                        <h3 style="  text-align: center; font: bold; font-size: 40;">Contact Form </h3>

                        <form action="condatabase.php" method="post">
                            <label for="username">Full Name</label>
                            <input type="text" id="username" name="username" placeholder="Your Name">
                            
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Mail">

                            <label for="phonenumber">Phone Number</label>
                            <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                             


                             <label for="country">Query</label>

                             <select id="query" name="query">
                                <option value="percel">percel</option>
                                <option value="account">account</option>
                                <option value="product">product</option>
                                 <option value="refound">refound</option>
                            </select>
                            
                            <label for="subject">Massage</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                            
                            <input type="submit" value="Submit">
                        </form>

                       



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

        

        


    </body>

</html>