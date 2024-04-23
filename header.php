<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashirwaad Jewelry</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/pages.css">
</head>

<body>
    <div class="home_black_version">
        <header class="header_area header_black">
            <!-- header middle starts -->
            <div class="header_middel">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo/logo-ash.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-7 col-6">
                            <div class="middel_right">
                                <?php if (TRUE) { ?>
                                <div class="cart_link">
                                    <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity">Rs.
                                            67,598</span><i class="ion-chevron-down"></i></a>
                                    <span class="cart_quantity">2</span>

                                    <!-- mini cart -->
                                    <div class="mini_cart">
                                        <div class="cart_close">
                                            <div class="cart_text">
                                                <h3>cart</h3>
                                            </div>
                                            <div class="mini_cart_close">
                                                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/product.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Earings</a>
                                                <span class="quantity">Qty : 1</span>
                                                <span class="price_cart">Rs. 54,599</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Bracelet</a>
                                                <span class="quantity">Qty : 1</span>
                                                <span class="price_cart">Rs. 12,999</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_total">
                                            <span>Subtotal : </span>
                                            <span>Rs. 67,598</span>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button view_cart">
                                                <a href="#">View Cart</a>
                                            </div>
                                            <div class="cart_button checkout">
                                                <a href="#" class="active">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- mini cart ends  -->
                                </div>
                                <div class="my_account_link">
                                        <a href="#"><i class="ion-person"></i> My Account</a>
                                </div>
                                <?php } else { ?>
                                    <!-- Login link -->
                                    <div class="login_link">
                                        <a href="#"><i class="ion-person"></i> Log In</a>
                                    </div>
                                    <!-- Sign Up link -->
                                    <div class="signup_link">
                                        <a href="#"><i class="ion-person-add"></i> Sign Up</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header middle ends -->

            <!-- header bottom starts -->

            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="logo_sticky">
                                    <a href="#"><img src="images/logo/logo-ash.png" alt="logo"></a>
                                </div>
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li class="active">
                                                <a href="#">Home <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="#">Banner</a></li>
                                                    <li><a href="#">Featured</a></li>
                                                    <li><a href="#">Collection</a></li>
                                                    <li><a href="#">Best Selling</a></li>
                                                    <li><a href="#">News</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Category <i class="ion-chevron-down"></i></a>
                                                <ul class="mega_menu">
                                                    <li>
                                                        <a href="#">Women</a>
                                                        <ul>
                                                            <li><a href="#">Earring</a></li>
                                                            <li><a href="#">Pendant</a></li>
                                                            <li><a href="#">Rings</a></li>
                                                            <li><a href="#">Chain</a></li>
                                                            <li><a href="#">Bangles</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Men</a>
                                                        <ul>
                                                            <li><a href="#">Ring</a></li>
                                                            <li><a href="#">Pendant</a></li>
                                                            <li><a href="#">Bracelet</a></li>
                                                            <li><a href="#">Chain</a></li>
                                                            <li><a href="#">Gemstone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Other</a>
                                                        <ul>
                                                            <li><a href="#">Platinium</a></li>
                                                            <li><a href="#">Silver</a></li>
                                                            <li><a href="#">Coins</a></li>
                                                            <li><a href="#">Gift Card</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Uncut Diamonds <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="#">Earrings</a></li>
                                                    <li><a href="#">Pendant</a></li>
                                                    <li><a href="#">Ring</a></li>
                                                    <li><a href="#">Bracelet</a></li>
                                                    <li><a href="#">Necklace Set</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">About Us</a></li>
                                            <li>
                                                <a href="#">Special Collection <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="#">Gemstone</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                    <li><a href="#">Rose Gold</a></li>
                                                    <li><a href="#">Silver</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom ends -->
        </header>