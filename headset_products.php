<?php
// Initialize the session
session_start();

?>
<?php
include_once 'database.php';
$res = mysqli_query($conn, "SELECT * FROM headset WHERE `keyword` LIKE '%headset%' AND `serial`< 10");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Products</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500;600;700&display=swap" rel="stylesheet">
        <link href="demo.css" rel="stylesheet"></link>
    </head>

    <body>
        
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="image/logo.png" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="">Home</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Account</a></li>
                    </ul>
                </nav>
                <img src="image/cart.png" width="30px" height="30px">
                <img src="image/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
  

    <!--products-->
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by price</option>
                <option>Sort by popularity</option>
                <option>Sort by rating</option>
                <option>Sort by sale</option>
            </select>
        </div>
        <div class="row">
            <div class="col-4">
            <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($res)) {
                        if ($i < 10) { ?>
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
                                                <p class="prod-i-categ"><a href="Product_page_headset1.php">Keyboard</a>
                                                </p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="<?php echo $row["path"]; ?>"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>

                            </div>
                    <?php }
                    } ?>
            </div>
            
        </div>
   

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>

        </div>
    </div>

        <!--footer-->
        <div class="footer">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download app for Android and IOS</p>
                    <div class="app-logo">
                        <img src="image/play-store.png">
                        <img src="image/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="image/logo-white.png">
                    <p>Our Purpose Is yo Sustainaibly Make the Pleasure and Benefits of Sports</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Coupons</li>
                       <li>Blog Posts</li>
                       <li>Return Policy</li>
                       <li>Join Affliate</li>
                   </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>instragram</li>
                       <li>YouTube</li>
                   </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">copyright 2021</p>
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