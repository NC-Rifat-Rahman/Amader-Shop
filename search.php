<?php
session_start();
error_reporting(0);
include_once 'database.php';
if (count($_POST) > 0) {
    $search = $_POST["search"];
    $result = mysqli_query($conn, "SELECT * FROM product where keyword LIKE '%$search%'");
}
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

    </head>

    <body style="background-color:#e6e6e6;">
        <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="image/logo.png" width="80px">

                </div>

                  
                      <ul id="MenuItems">


                        <li><a href="index.php" style="color: #0074D9;">Home</a></li>

                        <li><a href="Products.php"style="color: #0074D9;" >Shop Now</a></li>


                        <li><a href="AboutUs.php" style="color: #0074D9;" >About</a></li>
                        <li><a href="contact.php"style="color: #0074D9;" >Contact</a></li>
                        <li><a href="account.php" style="color: #0074D9;" >Account</a></li>
                        
                    </ul>
                </nav>
             

                <img src="image/cart.png" width="30px" height="30px">
     


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










 <div class="row">
            <div class="col-4">
                  <?php

                    $i = 1;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="row prod-items prod-items-4 ">
                                <article class=" sectgl-item sectgl-item ">

                                    <?php
                                    $i++; ?>
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="<?php echo $row["path"]; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">

                                                    <p class="prod-i-cart">
                                                        <a href="#" data-name="<?php echo $row["name"]; ?>" data-price="<?php echo $row["price"]; ?>" class="add-to-cart btn btn-primary"><i class="icon ion-android-cart"></i><span></span></a>
                                                    </p>


                                                </div>
                                            </div>

                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk</p>
                                                <p class="prod-i-categ"><a href="Product_page_headset1.php">Headset</a>
                                                </p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>

                            </div>
                    <?php }
                    } else {
                        echo "<h1>No Results Found </h1>";
                    }
                    ?>
            </div> 
        </div>


                <div class="footer">
            <div class="row">

                 <div class="footer_0">
                     <img src="image/logo.png" width="80">
                    <h3>Amader Shop</h3>
                   
                
                </div>
               

                <div class="footer_1">
                    <h3> Project Of cse482</h3>
                    
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

        
    </body>

</html>