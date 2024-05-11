<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawayah - Best Shoe Saling Website All Across Pakistan</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Css/homepage.css"> -->
    <?php echo wp_head();?>
</head>

<body <?php body_class();?>>
    <main>
        <!-- ======== Header Code Start =========== -->
        <header class="header">
            <div class="logoWithIcons">
                <div class="socialIcons">
                    <a class="MenuItems" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="MenuItems" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a class="MenuItems" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a class="MenuItems" href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a class="MenuItems" href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <h1 class="logo">
                    Rawayah
                </h1>
                <div class="icons">
                    <a class="MenuItems" href="#"><svg class="t4s-obj-eff t4s-icon-box3" width="18" height="20" viewBox="0 0 18 20"><path d="M8.66023 0L17.3205 4.99997V15L8.66023 20L0 15V4.99997L8.66023 0ZM8.66023 1.35316L1.75781 5.33826L3.45123 6.31596L10.3537 2.33085L8.66023 1.35316ZM11.5255 3.00743L4.6231 6.99255L5.79498 7.66913L12.6974 3.68401L11.5255 3.00743ZM13.8693 4.36059L6.96685 8.34572L8.66023 9.3234L15.5627 5.33826L13.8693 4.36059ZM16.1486 6.35313L9.24617 10.3383V18.3085L16.1486 14.3234V6.35313ZM8.0743 18.3085V10.3383L6.3809 9.36058V14.0223L2.86527 11.9926V7.33083L1.17188 6.35314V14.3234L8.0743 18.3085ZM4.03715 8.00741V11.316L5.20902 11.9926V8.684L4.03715 8.00741Z"></path></svg></a>
                    <a class="MenuItems" href="#"><i class="fa-solid fa-user"></i></a>
                    <a class="MenuItems" href="#"><i class="fa-regular fa-heart"></i></a>
                    <a class="MenuItems" href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>
            </div>
            <div class="main-menu">
                    
                <!-- <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="£">All Products</a></li>
                    <li><a href="#">Categories</a>
                    <ul>
                        <li><a href="#">example</a></li>
                        <li><a href="#">example</a></li>
                        <li><a href="#">example</a></li>
                        <li><a href="#">example</a></li>
                        <li><a href="#">example</a></li>
                    </ul>
                </li>
                    <li><a href="£">New Arrivals</a></li>
                    <li><a href="£">Contact</a></li>
                </ul>
                </nav> -->
                <?php
                    // Place this code where you want to display the menu, typically in header.php or any other template file
                    $menu_args = array(
                        'theme_location'  => 'header_menu', // This should match the registered menu location
                        'container'       => 'nav', // Container element for the menu
                        'container_class' => 'header-menu', // Class for the container
                    );

                    wp_nav_menu( $menu_args );
                    ?>
                
            </div>
            <div class="strip">
                <i class="fa-solid fa-person-walking-arrow-loop-left"></i>
                <div class="return">
                    <h3 class="heading"> Free Return</h3>
                    <p class="subText">Our rider will come & receive the Shoe form you</p>
                </div>
                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                <div class="freeExchange">
                    <h3 class="heading">Free Exchange</h3>
                    <p class="subText">Our rider will exchange the shoes at your doorstep</p>
                </div>
                <i class="fa-solid fa-truck"></i>
                <div class="freeDelivery">
                    <h3 class="heading">Free Delivery</h3>
                    <p class="subText">Free delivery all over Pakistan</p>
                </div>
                <i class="fa-solid fa-award"></i>
                <div class="warranty">
                    <h3 class="heading">6 Months Warranty</h3>
                    <p class="subText">Every shoe will come with 6 months warranty</p>
                </div>
            </div>
        </header>
        <!-- ========= Header Code Ends =========== -->