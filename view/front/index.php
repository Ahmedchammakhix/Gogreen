<?php
session_start();
include "../../controller/panierC.php";




$panierC=new panierC();
$panierC1=new panierC();
$idpanier= isset($idpanier);
  $list = $panierC1->calculerpanier($idpanier);
  
   $N=0;
   
  
  $N=$list['nb'];
   

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Gsore | Grocery and Organic Food Shop HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    
    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="assets/css/plugin/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugin/jquery.lineProgressbar.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        <!--  Start Large Header Section   -->
        <div class="header d-none d-lg-block">
            <!-- Start Header Top area -->
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__top-content d-flex justify-content-between align-items-center">
                                <div class="header__top-content--left">
                                    <span>Free Delivery: Take advantage of our time to save event</span>
                                </div>
                                <ul class="header__top-content--right user-set-role d-flex">
                                    <li class="user-currency pos-relative">
                                        <a class="user-set-role__button" href="#" data-bs-toggle="dropdown" aria-expanded="false">Select Language<i class="fal fa-chevron-down"></i></a>
                                        <ul class="expand-dropdown-menu dropdown-menu" >
                                            <li><a href="#"><img src="assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                                            <li><a href="#"><img src="assets/img/icon/flag/icon_france.png" alt="">French</a></li>
                                        </ul>
                                    </li>
                                    <li class="user-info pos-relative">
                                        <a class="user-set-role__button" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Select Currency <i class="fal fa-chevron-down"></i></a>
                                        <ul class="expand-dropdown-menu dropdown-menu" >
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">POUND</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Start Header Top area -->

            <!-- Start Header Center area -->
            <div class="header__center sticky-header p-tb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <!-- Start Logo -->
                            <div class="header__logo">
                                <a href="index.php" class="header__logo-link img-responsive">
                                    <img class="header__logo-img img-fluid" src="assets/img/logo/logo.png" alt="">
                                </a>
                            </div> <!-- End Logo -->
                             <!-- Start Header Menu -->
                             <div class="header-menu">
                                <nav>
                                    <ul class="header__nav">
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="index.php" class="header__nav-link">Home</a>
                                        </li> <!-- End Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Shop <i class="fal fa-chevron-down"></i></a>
                                            <span class="menu-label menu-label--red">New</span>
                                            <!-- Megamenu Menu-->
                                            <ul class="mega-menu pos-absolute">
                                                <li class="mega-menu__box">
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Shop Layout</span>
                                                        <ul class="mega-menu__item">
                                                            <li class="mega-menu__list"><a href = "bio.php" class="mega-menu__link">PRODUCTS</a></li>
                                                            <li class="mega-menu__list pos-relative">
                                                                <a href="shop-sidebar-grid-right.html" class="mega-menu__link">Grid Right Sidebar</a>
                                                                <span class="menu-label menu-label--red">New</span>
                                                            </li>
                                                            <li class="mega-menu__list"><a href="shop-sidebar-full-width.html" class="mega-menu__link">Full Width</a></li>
                                                            <li class="mega-menu__list"><a href="shop-sidebar-left-list-view.html" class="mega-menu__link">List Left Sidebar</a></li>
                                                            <li class="mega-menu__list"><a href="shop-sidebar-right-list-view.html" class="mega-menu__link">List Right Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->
            
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Shop Pages</span>
                                                        <ul class="mega-menu__item">
                                                            <li class="mega-menu__list"><a href="afficherlignecommande.php" class="mega-menu__link">Commandes</a></li>
                                                            <li class="mega-menu__list"><a href="panier.php" class="mega-menu__link">Checkout</a></li>
                                                            <li class="mega-menu__list"><a href="compare.html" class="mega-menu__link">Compare</a></li>
                                                            <li class="mega-menu__list pos-relative">
                                                                <a href="empty-afficherlignecommande.php" class="mega-menu__link">Empty Cart</a>
                                                                <span class="menu-label menu-label--blue">New</span>
                                                            </li>
                                                            <li class="mega-menu__list"><a href="wishlist.html" class="mega-menu__link">Wishlist</a></li>
                                                            <li class="mega-menu__list"><a href="connexion.php" class="mega-menu__link">My Account</a></li>
                                                            <li class="mega-menu__list"><a href="login.html" class="mega-menu__link">Login</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->
            
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Product Single</span>
                                                        <ul class="mega-menu__item">
                                                            <li class="mega-menu__list"><a href="bio.php" class="mega-menu__link">Simple</a></li>
                                                            <li class="mega-menu__list"><a href="product-single-affiliate.html" class="mega-menu__link">Affiliate</a></li>
                                                            <li class="mega-menu__list pos-relative">
                                                                <a href="product-single-group.html" class="mega-menu__link">Grouped</a>
                                                                <span class="menu-label menu-label--red">New</span>
                                                            </li>
                                                            <li class="mega-menu__list"><a href="product-single-variable.html" class="mega-menu__link">Variable</a></li>
                                                            <li class="mega-menu__list"><a href="product-single-tab-left.html" class="mega-menu__link">Left Tab</a></li>
                                                            <li class="mega-menu__list"><a href="product-single-tab-right.html" class="mega-menu__link">Right Tab</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->

                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Product Single</span>
                                                        <ul class="mega-menu__item">
                                                            <li class="mega-menu__list"><a href="product-single-slider.html" class="mega-menu__link">Single Slider</a></li>
                                                            <li class="mega-menu__list"><a href="product-single-gallery-left.html" class="mega-menu__link">Gallery Left</a></li>
                                                            <li class="mega-menu__list"><a href="product-single-gallery-right.html" class="mega-menu__link">Gallery Right</a></li>
                                                            <li class="mega-menu__list"><a href="product-single-sticky-left.html" class="mega-menu__link">Sticky Left</a></li>
                                                            <li class="mega-menu__list pos-relative">
                                                                <a href="product-single-sticky-right.html" class="mega-menu__link">Sticky Right</a>
                                                                <span class="menu-label menu-label--blue">New</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->
            
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <ul class="mega-menu__item">
                                                            <!--Megamenu Item Banner-->
                                                            <li class="mega-menu__banner ">
                                                                <a href="bio.php" class="mega-menu__banner-link">
                                                                    <img src="assets/img/banner/menu-banner.jpg" alt="" class="mega-menu__banner-img mega-menu__banner-img--vertical">
                                                                </a>
                                                            </li>
                                                            <!--Megamenu Item Banner-->
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->
                                                </li>
                                                
                                            </ul>
                                            <!-- Megamenu Menu-->
                                        </li> <!-- Start Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Custom Block <i class="fal fa-chevron-down"></i></a>
                                            <!-- Megamenu Menu-->
                                            <ul class="mega-menu pos-absolute">
                                                <li class="mega-menu__box">
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Women Is Clothes & Fashion</span>
                                                        <ul class="mega-menu__item">
                                                            <li><p>Shop Women Is Clothing And Accessories And Get Inspired By The Latest Fashion Trends.</p></li>
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->
            
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Simple Style</span>
                                                        <ul class="mega-menu__item">
                                                            <li><p>A New Flattering Style With All The Comfort Of Our Linen.</p></li>
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->
            
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Easy Layers</span>
                                                        <ul class="mega-menu__item">
                                                            <li><p>Endless Styling Possibilities In A Collection Full Of Versatile Pieces.</p></li>
                                                        </ul>
                                                    </div>
                                                    <!--Single Megamenu Item Menu-->
            
                                                </li>
                                                <!--Megamenu Item Banner-->
                                                <li class="mega-menu__banner m-t-30">
                                                    <a href="bio.php" class="mega-menu__banner-link">
                                                        <img src="assets/img/banner/menu-banner-2.png" alt="" class="mega-menu__banner-img mega-menu__banner-img--horaizontal">
                                                    </a>
                                                </li>
                                                <!--Megamenu Item Banner-->
                                            </ul>
                                            <!-- Megamenu Menu-->
                                        </li> <!-- Start Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Blog<i class="fal fa-chevron-down"></i></a>
                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">
                                                <li class="dropdown__list">
                                                    <a href="#" class="dropdown__link d-flex justify-content-between align-items-center">Blog Grid <i class="far fa-chevron-right"></i></a>
                                                    <ul class="dropdown__submenu pos-absolute">
                                                        <li class="dropdown__submenu-list"><a href="blog-grid-sidebar-left.html" class="dropdown__submenu-link"> Blog Grid Left Sidebar</a></li>
                                                        <li class="dropdown__submenu-list"><a href="blog-grid-sidebar-right.html" class="dropdown__submenu-link"> Blog Grid Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="#" class="dropdown__link d-flex justify-content-between align-items-center">Blog List <i class="far fa-chevron-right"></i></a>
                                                    <ul class="dropdown__submenu pos-absolute">
                                                        <li class="dropdown__submenu-list"><a href="blog-list-sidebar-left.html" class="dropdown__submenu-link"> Blog List Left Sidebar</a></li>
                                                        <li class="dropdown__submenu-list"><a href="blog-list-sidebar-right.html" class="dropdown__submenu-link"> Blog List Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="#" class="dropdown__link d-flex justify-content-between align-items-center">Blog Single <i class="far fa-chevron-right"></i></a>
                                                    <ul class="dropdown__submenu pos-absolute">
                                                        <li class="dropdown__submenu-list"><a href="blog-single-sidebar-left.html" class="dropdown__submenu-link"> Blog Single Left Sidebar</a></li>
                                                        <li class="dropdown__submenu-list"><a href="blog-single-sidebar-right.html" class="dropdown__submenu-link"> Blog Single Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Pages <i class="fal fa-chevron-down"></i></a>
                                            <span class="menu-label menu-label--blue">New</span>
                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">
                                                <li class="dropdown__list"><a href="about.html" class="dropdown__link">About Us</a></li>
                                                <li class="dropdown__list pos-relative">
                                                    <a href="frequently-questions.html" class="dropdown__link">Frequently Questions</a>
                                                    <span class="menu-label menu-label--blue">New</span>
                                                </li>
                                                <li class="dropdown__list"><a href="privacy-policy.html" class="dropdown__link">Privacy Policy</a></li>
                                                <li class="dropdown__list"><a href="404.html" class="dropdown__link">404 Page</a></li>
                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li> <!-- End Single Nav link-->
            
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                                <a href="contact.html" class="header__nav-link">Contact Us</a>
                                        </li> <!-- End Single Nav link-->
                                    </ul>
                                </nav>
                            </div> <!-- End Header Menu -->
                            <!-- Start Wishlist-AddCart -->
                            <ul class="header__user-action-icon">
                                <!-- Start Header Wishlist Box -->
                                <li>
                                    <a href="connexion.php">
                                        <i class="icon-users"></i>
                                    </a>
                                </li> <!-- End Header Wishlist Box -->
                                <!-- Start Header Wishlist Box -->
                                <li>
                                    <a href="panier.php">
                                        <i class="icon-heart"></i>
                                    </a>
                                </li> <!-- End Header Wishlist Box -->
                                <!-- Start Header Add Cart Box -->
                                
                                <li>
                                    <a href="panier.php">
                                        <i class="icon-shopping-cart"></i>
                                    </a>
                                </li>





//
                                


                                      
                                        
                                 <!-- End Header Add Cart Box -->
                            </ul> 
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Center area -->

             <!-- Start Header bottom area -->
             <div class="header__bottom p-tb-30">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-menu-vertical pos-relative">
                                <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>CATEGORIES</h4>
                                <ul class="menu-content pos-absolute">
                                    <li class="menu-item"><a href="#">Search Terms</a></li>
                                    <li class="menu-item"><a href="#">Advanced Search</a></li>
                                    <li class="menu-item"><a href="#">Helps & Faqs</a></li>
                                    <li class="menu-item"><a href="#">Store Location</a></li>
                                    <li class="menu-item"><a href="#"> Orders & Returns</a></li>
                                    <li class="menu-item"><a href="#"> Deliveries</a></li>
                                    <li class="menu-item"><a href="#"> Refund & Returns</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <form class="header-search" action="#" method="post">
                                <div class="header-search__content pos-relative">
                                    <input type="search" name="header-search" placeholder="Search our store" required>
                                    <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-phone text-end"><span>Call Us: 123 456 789</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header bottom area -->
            
        </div> <!--  End Large Header Section  -->

        <!--  Start Mobile Header Section   -->
        <div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="index.php" class="header__mobile-logo-link">
                                        <img src="assets/img/logo/logo.png" alt="" class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Start User Action -->
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end"> 
                            <!-- Start Header Add Cart Box -->
                            <li>
                                <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                   
                                </a>
                            </li> <!-- End Header Add Cart Box -->
                            <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a></li>

                        </ul>   <!-- End User Action -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="header-menu-vertical pos-relative m-t-30">
                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>CATEGORIES</h4>
                            <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="#">Search Terms</a></li>
                                <li class="menu-item"><a href="#">Advanced Search</a></li>
                                <li class="menu-item"><a href="#">Helps & Faqs</a></li>
                                <li class="menu-item"><a href="#">Store Location</a></li>
                                <li class="menu-item"><a href="#"> Orders & Returns</a></li>
                                <li class="menu-item"><a href="#"> Deliveries</a></li>
                                <li class="menu-item"><a href="#"> Refund & Returns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            
            <div class="offcanvas-inner">
                <ul class="user-set-role d-flex justify-content-between m-tb-15">
                    <li class="user-currency pos-relative">
                        <a class="user-set-role__button" href="#" data-bs-toggle="dropdown" aria-expanded="false">Select Language<i class="fal fa-chevron-down"></i></a>
                        <ul class="expand-dropdown-menu dropdown-menu" >
                            <li><a href="#"><img src="assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                            <li><a href="#"><img src="assets/img/icon/flag/icon_france.png" alt="">French</a></li>
                        </ul>
                    </li>
                    <li class="user-info pos-relative">
                        <a class="user-set-role__button" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Select Currency <i class="fal fa-chevron-down"></i></a>
                        <ul class="expand-dropdown-menu dropdown-menu" >
                            <li><a href="#">USD</a></li>
                            <li><a href="#">POUND</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="header-search m-tb-15" action="#" method="post">
                    <div class="header-search__content pos-relative">
                        <input type="search" name="header-search" placeholder="Search our store" required>
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                 <!-- Start Mobile User Action -->
                <ul class="header__user-action-icon m-tb-15 text-center">
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="connexion.php">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="wishlist.html">
                            <i class="icon-heart"></i>
                            <span class="item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="afficherlignecommande.php">
                            <i class="icon-shopping-cart"></i>
                            
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul>  <!-- End Mobile User Action -->
                <div class="offcanvas-menu">
                    <ul>
                        <li><a href="index.php"><span>Home</span></a></li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="sub-menu">
                                        <li><a href="bio.php">Grid Left Sidebar</a></li>
                                        <li><a href="shop-sidebar-grid-right.html">Grid Right Sidebar</a></li>
                                        <li><a href="shop-sidebar-full-width.html">Full Width</a></li>
                                        <li><a href="shop-sidebar-left-list-view.html">List Left Sidebar</a></li>
                                        <li><a href="shop-sidebar-right-list-view.html">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="afficherlignecommande.php">Cart</a></li>
                                        <li><a href="panier.php">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="empty-afficherlignecommande.php">Empty Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="connexion.php">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                                        
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="bio.php">Simple</a></li>
                                        <li><a href="product-single-affiliate.html">Affiliate</a></li>
                                        <li><a href="product-single-group.html">Grouped</a></li>
                                        <li><a href="product-single-variable.html">Variable</a></li>
                                        <li><a href="product-single-tab-left.html">Left Tab</a></li>
                                        <li><a href="product-single-tab-right.html">Right Tab</a></li>
                                        <li><a href="product-single-slider.html">Single Slider</a></li>
                                        <li><a href="product-single-gallery-left.html">Gallery Left</a></li>
                                        <li><a href="product-single-gallery-right.html">Gallery Right</a></li>
                                        <li><a href="product-single-sticky-left.html">Sticky Left</a></li>
                                        <li><a href="product-single-sticky-right.html">Sticky Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-sidebar-left.html"> Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-sidebar-right.html"> Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-list-sidebar-left.html"> Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-sidebar-right.html"> Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-single-sidebar-left.html"> Blog Single Left Sidebar</a></li>
                                        <li><a href="blog-single-sidebar-right.html"> Blog Single Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="frequently-questions.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <ul class="offcanvas__social-nav m-t-50">
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-youtube"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div> <!--  End Mobile-offcanvas Menu Section   -->

        <!--  Start Popup Add Cart  -->
        <div  id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Cart</span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            <!-- Start Add Cart Item Box-->
            <ul class="offcanvas-add-cart__menu">
                <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                    <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">
                        <div class="offcanvas-add-cart__img-box pos-relative">
                            <a href="bio.php" class="offcanvas-add-cart__img-link img-responsive"><img src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="" class="add-cart__img"></a>
                            <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
                        </div>
                        <div class="offcanvas-add-cart__detail">
                            <a href="bio.php" class="offcanvas-add-cart__link">Lucky Wooden Elephant</a>
                            <span class="offcanvas-add-cart__price">$29.00</span>
                            <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>
                        </div>
                    </div>
                    <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                </li> <!-- Start Single Add Cart Item-->
                <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between">
                    <div class="offcanvas-add-cart__content d-flex  align-items-start m-r-10">
                        <div class="offcanvas-add-cart__img-box pos-relative">
                            <a href="bio.php" class="offcanvas-add-cart__img-link img-responsive"><img src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="" class="add-cart__img"></a>
                            <span class="offcanvas-add-cart__item-count pos-absolute">2x</span>
                        </div>
                        <div class="offcanvas-add-cart__detail">
                            <a href="bio.php" class="offcanvas-add-cart__link">Lucky Wooden Elephant</a>
                            <span class="offcanvas-add-cart__price">$29.00</span>
                            <span class="offcanvas-add-cart__info">Dimension: 40x60cm</span>
                        </div>
                    </div>
                    <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                </li> <!-- Start Single Add Cart Item-->
            </ul> <!-- Start Add Cart Item Box-->
            <!-- Start Add Cart Checkout Box-->
            <div class="offcanvas-add-cart__checkout-box-bottom">
                <!-- Start offcanvas Add Cart Checkout Info-->
                <ul class="offcanvas-add-cart__checkout-info">
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Subtotal</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$60.59</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Shipping</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$7.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Taxes</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$0.00</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Total</span>
                        <span class="offcanvas-add-cart__checkout-right-info">$67.59</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                </ul> <!-- End offcanvas Add Cart Checkout Info-->

                <div class="offcanvas-add-cart__btn-checkout">
                    <a href="panier.php" class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Checkout</a>
                </div>
            </div> <!-- End Add Cart Checkout Box-->
        </div> <!-- End Popup Add Cart -->

        <div class="offcanvas-overlay"></div>
    </header>  <!-- :::::: End Header Section ::::::  -->  

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <!-- ::::::  Start Hero Section  ::::::  -->
        <div class="hero slider-dot-fix slider-dot slider-dot-fix slider-dot--center slider-dot-size--medium slider-dot-circle  slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="assets/img/hero/p.png" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Healthy & Affordable</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Organic <br>  Vegetables</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Small Changes Big Difference</h4>
                                    <a href="bio.php" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="assets/img/hero/hero-home-1-img-2.jpg" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Healthy & Affordable</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Organic <br>   fresh fruits</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Small Changes Big Difference</h4>
                                    <a href="bio.php" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
        </div> <!-- ::::::  End Hero Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner m-t-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="bio.php" class="banner__link">
                                    <img src="assets/img/banner/size-wide/banner-home-1-img-1-wide.jpg" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title  font--regular letter-spacing--4  text-center m-b-10">Green Vegetable</h6>
                                    <h2 class="banner__title banner__title--large font--medium letter-spacing--4  text-uppercase">100% ORGANIC</h2>
                                    <h6 class="banner__title font--regular letter-spacing--4  text-center m-b-20">Healthy Nutrition</h6>
                                    <div class="text-center">
                                        <a href="bio.php" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Buy Now</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="bio.php" class="banner__link">
                                    <img src="assets/img/banner/size-wide/banner-home-1-img-2-wide.jpg" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-10">Fresh herbs</h6>
                                    <h2 class="banner__title banner__title--large letter-spacing--4 font--medium text-uppercase">SPINACH</h2>
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-20">Healthy Food</h6>
                                    <div class="text-center">
                                        <a href="bio.php" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Buy Now</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Catagory Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Top categories</h5>
                            <a href="bio.php" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More categories <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__catagory">
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Pure egg Collection </a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-1.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-2.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Fresh Milk Collection</a>
                                    <span class="product__items--text">3 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-3.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">0 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-4.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Best beef Collection</a>
                                    <span class="product__items--text">3 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-5.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">0 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-6.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">3 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-7.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Fresh Carrot Collection</a>
                                    <span class="product__items--text">0 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-8.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Pure Masroom Collection</a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-9.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="bio.php" class="product__link">Best Mashroom Collection</a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="bio.php" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/category/category-home-1-img-10.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Catagory Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Top categories</h5>
                            <ul class="tablist tablist--style-blue tablist--style-gap-20 nav">
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#fruits">Fruites</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#milk">Milk</a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#fish">Fish</a></li>
                            </ul>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content tab-animate-zoom">
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane show active" id="fruits">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-10%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Cabbage vegetables</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Best red meat</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane" id="milk">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">

                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-10%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Cabbage vegetables</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Best red meat</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane" id="fish">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-10%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Cabbage vegetables</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Best red meat</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="bio.php" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="bio.php" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

         <!-- ::::::  Start banner Section  ::::::  -->
         <div class="banner m-t-100 pos-relative">
            <div class="banner__bg">
                <img src="assets/img/banner/size-extra-large-wide/banner-home-1-img-1-extra-large-wide.jpg" alt="">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                                <h6 class="banner__title  font--medium m-b-10">SPECIAL DISCOUNT</h6>
                                <h1 class="banner__title banner__title--large font--regular text-capitalize">For all Grocery <br>
                                    products</h1>
                                <h6 class="banner__title font--medium m-b-40">Take now 20% off for all grocer product.</h6>
                                <a href="bio.php" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Shop now</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>    
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">New Products</h5>
                            <a href="bio.php" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More Products<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-34%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Fresh green vegetable</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                        </a>
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Fresh river fish</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$25.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-10%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Countdown -->
                                        <div class="product__counter-box">
                                            <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                        </div> <!-- End Product Countdown -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Fresh pomegranate</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$21.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                        </a>
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Cabbage vegetables</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$50.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-31%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Best red meat</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$55.00 <del>$80.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-34%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Fresh green apple</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-34%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Juice fresh orange</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-35%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Countdown -->
                                        <div class="product__counter-box">
                                            <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                        </div> <!-- End Product Countdown -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Best ripe grapes</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$39.00 <del>$60.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-out">Soldout</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Cow fresh milk</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$55.00 <del>$75.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="bio.php" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-out">Soldout</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="bio.php" class="product__link">Fresh Red Tomato</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$10.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <!-- ::::::  Start Testimonial Section  ::::::  -->
        <div class="testimonial m-t-100 pos-relative">
            <div class="testimonial__bg">
                <img src="assets/img/testimonial/testimonials-bg.jpg" alt="">
            </div>
            <div class="testimonial__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Our Client Say!</h2>
                            </div>
                            <div class="testimonial__slider default-slider">
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user" src="assets/img/testimonial/testimonial-home-1-img-1.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Nirob Khan / <span>CEO</span> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user" src="assets/img/testimonial/testimonial-home-1-img-2.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Torvi / <span>C0O</span> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Testimonial Section  ::::::  -->

        <!-- ::::::  Start  Blog News  ::::::  -->
        <div class="blog m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Our Latest News</h5>
                            <a href="blog-list-sidebar-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More blogs <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red">
                            <div class="blog-feed-slider-3grid default-slider gap__col--30 ">
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-2.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-3.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-4.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  -->

         <!-- ::::::  Start Newsletter Section  ::::::  -->
         <div class="newsletter m-t-100 pos-relative">
            <div class="newsletter__bg">
                <img src="assets/img/newsletter/newsletter-bg.jpg" alt="">
            </div>
            <div class="newsletter__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Subscribe To Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form class="newsletter__form" action="#" method="post">
                                <div class="newsletter__form-content pos-relative">
                                    <label class="pos-absolute" for="newsletter-mail"><i class="icon-mail"></i></label>
                                    <input type="email" name="newsletter-mail" id="newsletter-mail" placeholder="Your mail address">
                                    <button class="text-uppercase pos-absolute" type="submit" >Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End newsletter Section  ::::::  -->

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo__area default-slider">
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Company Logo Section  ::::::  -->

    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->

    <!-- ::::::  Start  Footer ::::::  -->
    <footer class="footer m-t-100">
        <div class="container">
            <!-- Start Footer Top Section --> 
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="index.php" class="footer__logo-link">
                                    <img src="assets/img/logo/logo.png" alt="" class="footer__logo-img">
                                </a>
                            </div>
                            <ul class="footer__address">
                                <li class="footer__address-item"><i class="fa fa-home"></i>No: 58 A, your Street, Baltimore, USA 4508</li>
                                <li class="footer__address-item"><i class="fa fa-phone-alt"></i>+01 23456789</li>
                                <li class="footer__address-item"><i class="fa fa-envelope"></i>support@somemail.com</li>
                            </ul>
                            <ul class="footer__social-nav">
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-twitter"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-youtube"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <!-- Start Footer Nav -->  
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">INFORMATION</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="" class="footer__link">Delivery Information</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Advanced Search</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Helps & Faqs</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Store Location</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Orders & Returns</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Deliveries</a></li>
                                <li class="footer__list"><a href="" class="footer__link"> Refund & Returns</a></li>
                            </ul>
                        </div> <!-- End Footer Nav --> 
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">OUR COMPANY</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="" class="footer__link">Delivery</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Legal Notice</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Sitemap</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Secure payment</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Blog</a></li>
                                <li class="footer__list"><a href="" class="footer__link">About us</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Carrers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">MY ACCOUNT</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="" class="footer__link">Search Terms</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Advanced Search</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Helps & Faqs</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Store Location</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Orders & Returns</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Deliveries</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Refund & Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">OPENING TIME</h4>
                            <ul class="footer__nav">
                                <li class="footer__list">Mon - Fri: 8AM - 10PM</li>
                                <li class="footer__list">Sat: 9AM-8PM</li>
                                <li class="footer__list">Suns: 14hPM-18hPM</li>
                                <li class="footer__list">Mon - Fri: 8AM - 10PM</li>
                                <li class="footer__list">We Work All The Holidays</li>
                                <li class="footer__list"><a href="" class="footer__link font--bold">Download our app</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- End Footer Top Section -->
            <!-- Start Footer Bottom Section --> 
            <div class="footer__bottom">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <!-- Start Footer Copyright Text -->
                        <div class="footer__copyright-text">
                            <p>Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>. All Rights Reserved</p>
                        </div> <!-- End Footer Copyright Text -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <!-- Start Footer Payment Logo -->
                        <div class="footer__payment">
                            <a href="#" class="footer__payment-link">
                                <img src="assets/img/company-logo/payment.png" alt="" class="footer__payment-img">
                            </a>
                        </div>  <!-- End Footer Payment Logo -->
                    </div>
                </div>
            </div> <!-- End Footer Bottom Section --> 
        </div>
    </footer> <!-- ::::::  End  Footer ::::::  -->
    
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-end">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Added to cart successfully!</div>
                                    <div class="modal__product-cart-buttons m-tb-15">
                                        <a href="afficherlignecommande.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">View Cart</a>
                                        <a href="panier.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal__border">
                            <ul class="modal__product-shipping-info">
                                <li class="link--icon-left"><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</li>
                                <li>TOTAL PRICE: <span>$187.00</span></li>
                                <li><a href="#" class="btn text-underline color-green" data-bs-dismiss="modal">CONTINUE SHOPPING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-end">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery-box m-b-60">
                                    <div class="modal-product-image--large">
                                        <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h5 class="title title--normal m-b-20">Aliquam lobortis</h5>
                                    <div class="product__price">
                                        <span class="product__price-del">$35.90</span>
                                        <span class="product__price-reg">$31.69</span>
                                    </div>
                                    <ul class="product__review m-t-15">
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                    </ul>
                                    <div class="product__desc m-t-25 m-b-30">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Quantity: </span>
                                            <form class="modal-quantity-scale m-l-20">
                                                <div class="value-button" id="modal-decrease" onclick="decreaseValueModal()">-</div>
                                                <input type="number" id="modal-number" value="1" />
                                                <div class="value-button" id="modal-increase" onclick="increaseValueModal()">+</div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="product-links">
                                        <div class="product-social m-tb-30">
                                            <span>SHARE THIS PRODUCT</span>
                                            <ul class="product-social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->


    <!-- Vendor JS Files -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS Files -->
    <script src="assets/js/plugin/slick.min.js"></script>
    <script src="assets/js/plugin/jquery.countdown.min.js"></script>
    <script src="assets/js/plugin/material-scrolltop.js"></script>
    <script src="assets/js/plugin/price_range_script.js"></script>
    <script src="assets/js/plugin/in-number.js"></script>
    <script src="assets/js/plugin/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="assets/js/plugin/venobox.min.js"></script>
    <script src="assets/js/plugin/jquery.waypoints.js"></script>
    <script src="assets/js/plugin/jquery.lineProgressbar.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="assets/js/main.js"></script>
</body>

</html>
