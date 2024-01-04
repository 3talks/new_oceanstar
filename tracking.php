<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Ocean Star Cargo</title>
    <style>
       
       #track-1{
        margin-top: -18em;
       }
      

        form {
            margin-bottom: 20px;
            
        }

        label {
            display: inline-block;
            margin-bottom: 1em;
            color: #000;
            font-size: 19px;

        }

        input {
            width: 45%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        hr {
            border: 1px solid #ddd;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="banner3">
        <div class="navigation w-nav">
            <a href="index.html"  class="brand"><img src="assets/image/Ocean Star Logo.png" width="90" alt="Oceanstarlogo"></a>
            <nav class="nav-menu w-nav-menu">
                <a href="index.html" class="nav-link w-inline-block ">
                    <div class="nav-text">
                        Home
                    </div>
                </a>
                <!-- <a href="about.html" class="nav-link">
                    <div class="nav-text">
                        About
                    </div>
                </a> -->
                <a href="services.html" class="nav-link">
                    <div class="nav-text">
                        Services
                    </div>
                </a>
                <a href="#" class="nav-link w--current">
                    <div class="nav-text">
                        Tracking
                    </div>
                </a>
                <a href="gallery.html" class="nav-link"> 
                    <div class="nav-text">
                        Gallery
                    </div>
                </a>
                <div class="dropdown w-dropdown" id="dropdown-item">
                    <div class="nav-link drop w-dropdown-toggle">
                      <div class="icon w-icon-dropdown-toggle"></div>
                      <div class="navtext">English</div>
                      <img src="https://nuuk-e3eaa.firebaseapp.com/assets/img/sort-down.svg" width="8" alt="" class="arrow-image"/>
                    </div>
                    <nav class="dropdown-list w-dropdown-list">
                      <a href="chinese_index.html" class="dropdown-link w-dropdown-link">Chinese</a>
                      
                    </nav> 
                </div>
                
                <div class="info-wrapper">
                    <div class="text-block">
                        
                    </div>
                </div>
            </nav>
            <div class="menu-button w-nav-button">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </div>
        </div>
        <div class="social-vertical">
            <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>            </a>
            <a href="#" class="social-icon w-inline-block">
                <i class="fab fa-twitter"></i>            </a>
            <a href="#" class="social-icon w-inline-block">
                <i class="fab fa-linkedin-in"></i>            </a>
            <a href="#" class="social-icon no-bottom">
                <i class="fab fa-instagram"></i>            </a>
        </div>
        
    </div>

   

    
        <div class="section add-5-percent">
            <div class="container w-container">
                    <div class="top-title-wrapper">
                        <h1 class="top-title2">
                        <strong>
                           Tracking
                        </strong>    
                    </div>

                   

                    <div id="track-1">
    <?php
      require_once 'C:/xampp/htdocs/construction/php/functions.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_package'])) {
        $user_name = $_POST['user_name'];
        $package_detail =  $_POST['package_detail'];
        $package_status = 'In process'; // Initial status
        $admin_note = ''; // Initial status
        $tracking_number = generateTrackingNumber();

        $db = initializeDatabase();
        addPackage($db, $user_name, $package_detail, $package_status, $tracking_number);


        
        echo '<h2>Package Added Successfully</h2>';
        echo '<p>Your Tracking Number is: ' . $tracking_number . '</p>';
        echo '<p>Please keep Your tracking number safe.</p>';
    }
    ?>

    <form id="tracking" action="tracking.php" method="post">
        <label for="user_name">Your Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="user_name" required><br>
        <label for="package_detail">Package_detail:</label>
        <input type="text" name="package_detail" required><br>
        <button type="submit" name="add_package">Add Package</button>
    </form>
    </div>
                    <!-- <div class="w-dyn-list">
                        <div class="w-dyn-items w-row">
                            <div class="w-dyn-item content service-content-wrapper">
                                <div class="service-content">
                                    <img src="assets/icon/service-dark-1.png" class="features-icon"alt="">
                                    <h1 class="service-title">Road Freight</h1>
                                    <p>According to our company's recent actual operation of transportation cases, our company can usually ensure that bulk materials arrive at the project site within 45 Days.</p>
                                    <a href="#" class="navlink for-button blue w-inline-block learn-more-btn">
                                        <div>Learn More</div>
                                    </a>
                                </div>
                            </div>
                            <div class="content service-content-wrapper">
                                <div class="service-content">
                                    <img src="assets/icon/service-dark-2.png" class="features-icon"alt="">
                                    <h1 class="service-title">Air Freight</h1>
                                    <p>We can provide a door-to-door service, utilizing our China to Nepal agent’s network. we will take care of your Air Freight shipment every step of its journey</p>
                                    <a href="#" class="navlink for-button blue w-inline-block learn-more-btn">
                                        <div>Learn More</div>
                                    </a>
                                </div>
                            </div>
                            <div class="content service-content-wrapper">
                                <div class="service-content">
                                    <img src="assets/icon/service-dark-3.png" class="features-icon"alt="">
                                    <h1 class="service-title">Ocean Freight</h1>
                                    <p>Ocean Fright is far and away the most popular option for shipping goods internationally.</p>
                                    <a href="#" class="navlink for-button blue w-inline-block learn-more-btn">
                                        <div>Learn More</div>
                                    </a>
                                </div>
                            </div>
                            <div class="content service-content-wrapper">
                                <div class="service-content">
                                    <img src="assets/icon/service-dark-4.png" class="features-icon"alt="">
                                    <h1 class="service-title">Warehouse</h1>
                                    <p>We have our Warehouse located in different part of china such as Guangzhou city</p>
                                    <a href="#" class="navlink for-button blue w-inline-block learn-more-btn">
                                        <div>Learn More</div>
                                    </a>
                                </div>
                            </div>    
                        </div>    
                    </div> -->

                    

    <hr>

    <h2>Track Your Package</h2>
    <form action="tracking.php" method="get">
        <label for="tracking_number">Enter Tracking Number:</label>
        <input type="text" name="tracking_number" required>
        <button type="submit">Track Package</button>
    </form>


    <?php 
        
        require_once 'C:/xampp/htdocs/construction/php/functions.php';
       if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['tracking_number'])) {
           $tracking_number = $_GET['tracking_number'];
   
           $db = initializeDatabase();
           $package = getPackageByTrackingNumber($db, $tracking_number);
   
           if ($package) {
               echo '<h2>Package Details</h2>';
               echo '<p>Tracking Number: ' . $package['tracking_number'] . '</p>';
               echo '<p>User Name: ' . $package['user_name'] . '</p>';
               echo '<p>Package Detail: ' . $package['Package_Detail'] . '</p>';
               echo '<p>Status: ' . $package['package_status'] . '</p>';
               echo '<p>Admin Note: ' . $package['admin_note'] . '</p>';
           } else {
               echo '<h2>Package Not Found</h2>';
           }
       }
     
    
    
    ?>

                    <!-- about us section -->


                    <div class="margin-page">
                        <div class="row-flex verical w-row">
                            <div class="w-col-7 w-col-6 w-col-stack">
                                <div>
                                    
                                </div>
                            </div>
                            <div class="w-col-7 w-col-6 w-col-stack">
                                <div class="padding-right">
                                    <div class="top-title-wrapper">
                                        <h1 class="top-title">
                                           <strong><br></strong>
                                        </h1>
                                        <h1 class="top-title absolute"></h1>
                                    </div>
                                    
                                    <div class="top-margin half">
                                        <a href="#" class="navlink for-button blue w-inline-block learn-more-btn">
                                            <div></div>
                                        </a>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-page _10-percent">
                        
                    </div>
            </div>
        </div>

        <!-- Partners -->

        
        <div class="section gray small">
            
        </div>

        <!-- quote -->


       

        <!-- Team section -->



        <div class="section gray">
            <div class="container w-container">
                <div>
                    <div class="top-title-wrapper">
                        <h1 class="top-title">
                        <strong>
                            <br>
                        </strong>
                    </h1> 
                        <h1 class="top-title absolute"></h1>
                        <a href="#" class="navlink for-button blue _0 w-inline-block aside-navlink">
                            <div>
                                
                            </div>
                        </a>
                    </div>
                    <div>
                        <div class="w-row">
                            <div class="w-col-7 w-col-3">
                                
                            </div>
                            <div class="w-col-7 w-col-3">
                                
                            </div>
                            <div class="w-col-7 w-col-3">
                               
                            </div>
                            <div class="w-col-7 w-col-3">
                                
                            </div>
                        </div>
                    </div>



                    <!-- Testimonials -->




                    <div class="margin-page">
                          
                </div>
            </div>
        </div>



        <!-- news section -->



        <!-- <div class="section">
            <div class="container w-container">
                <div class="top-title-wrapper">
                    <h1 class="top-title">latest news
                    <strong>
                        <br>
                    </strong>
                </h1> 
                    <h1 class="top-title absolute">blog</h1>
                    <a href="#" class="navlink for-button blue _0 w-inline-block aside-navlink">
                        <div>
                            view blog
                        </div>
                    </a>
                </div>
            <div> -->
                <!-- <div class="w-dyn-list">
                    <div class="w-dyn-items w-row">
                        <div class="w-dyn-item w-col-7 w-col-4"> -->
                            <!-- <a href="#" class="blog-wrapper w-inline-block">
                                <div class="blog-image">
                                    <div class="meta-tag">
                                        <div class="meta-number">
                                            <div>17</div>
                                        </div>
                                        <div class="meta-month">
                                            <div>oct</div>
                                        </div>
                                    </div>
                                    <img src="https://nuuk-e3eaa.firebaseapp.com/assets/img/port-1.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <h1 class="top-title smaller-white blog">
                                        blogpost 1
                                    </h1>
                                    <p class="paragraph-white"> 
                                        Service and providing potential clients and customers
                                        with testimonials is one of the best ways to market.
                                    </p>
                                    <div class="navlink for-button blue white not-link">
                                        <div>read more</div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <!-- <div class="w-dyn-item w-col-7 w-col-4">
                            <a href="#" class="blog-wrapper w-inline-block">
                                <div class="blog-image">
                                    <div class="meta-tag">
                                        <div class="meta-number">
                                            <div>11</div>
                                        </div>
                                        <div class="meta-month">
                                            <div>dec</div>
                                        </div>
                                    </div>
                                    <img src="https://nuuk-e3eaa.firebaseapp.com/assets/img/port-2.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <h1 class="top-title smaller-white blog">
                                        blogpost 2
                                    </h1>
                                    <p class="paragraph-white"> 
                                        Service and providing potential clients and customers
                                        with testimonials is one of the best ways to market.
                                    </p>
                                    <div class="navlink for-button blue white not-link">
                                        <div>read more</div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <!-- <div class="w-dyn-item w-col-7 w-col-4">
                            <a href="#" class="blog-wrapper w-inline-block">
                                <div class="blog-image">
                                    <div class="meta-tag">
                                        <div class="meta-number">
                                            <div>27</div>
                                        </div>
                                        <div class="meta-month">
                                            <div>oct</div>
                                        </div>
                                    </div>
                                    <img src="https://nuuk-e3eaa.firebaseapp.com/assets/img/port-3.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <h1 class="top-title smaller-white blog">
                                        blogpost 3
                                    </h1>
                                    <p class="paragraph-white"> 
                                        Service and providing potential clients and customers
                                        with testimonials is one of the best ways to market.
                                    </p>
                                    <div class="navlink for-button blue white not-link">
                                        <div>read more</div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>    
            </div>
        </div>

        <!-- footer -->


        <div class="section logo">
            <div class="algin-center">
                <h1 class="top-title smaller-white no-width">
                    trusted by top companies
                    <strong>
                        <br>
                    </strong>
                </h1>
            </div>
            <div class="logo-flex">
                <a href="#" class="tab-logo logo-5 w-inline-block"></a>
                <a href="#" class="tab-logo logo-4 w-inline-block"></a>
                <a href="#" class="tab-logo logo-3 w-inline-block"></a>
                <a href="#" class="tab-logo logo-2 w-inline-block"></a>
                <a href="#" class="tab-logo logo-1 w-inline-block"></a>
                <h1 class="top-title smaller-white none-mobile">
                    trusted by top companies
                    <strong>
                        <br>
                    </strong>
                </h1>
            </div>
        </div>
        <div class="footer">
            <div class="container w-container">
                <div class="w-row">
                    <div class="w-col-7 w-col-4">
                        <div class="footer-column">
                            <div class="with-line">
                                <h1 class="top-title smaller-white in-footer">
                                     about Ocean Star Cargo
                                     <strong>
                                         <br>
                                     </strong>
                                </h1>
                                <div class="line"></div>
                            </div>
                            <p class="paragraph-white _100">
                                Based on collective work and shared knowledge, Nuuk aims to
                                favor dialogue and debate, to transform individual knowledge
                                into increased creative potential.
                                <strong>
                                    <br>
                                </strong>
                            </p>
                            <div class="navlink for-button blue white not-link">
                                <div>find on map</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-col-7 w-col-4">
                        <div class="footer-column">
                            <div class="with-line">
                                <h1 class="top-title smaller-white in-footer">
                                     services
                                     <strong>
                                         <br>
                                     </strong>
                                </h1>
                                <div class="line"></div>
                            </div>
                            <div class="w-dyn-list">
                                <div class="w-dyn-items">
                                    <div class="w-dyn-item">
                                        <div>
                                            <a href="#" class="navlink for-button blue white not-link">
                                            <div>Air Freight</div></a>
                                        </div>
                                        <div>
                                            <a href="#" class="navlink for-button blue white not-link">
                                            <div>Road Freight</div></a>
                                        </div>
                                        <div>
                                            <a href="#" class="navlink for-button blue white not-link">
                                            <div>Ocean Freight</div></a>
                                        </div>
                                        <div>
                                            <a href="#" class="navlink for-button blue white not-link">
                                            <div>Documentation</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-col-7 w-col-4">
                        <div class="footer-column">
                            <div class="with-line">
                                <h1 class="top-title smaller-white in-footer">
                                     contact us
                                     <strong>
                                         <br>
                                     </strong>
                                </h1>
                                <div class="line"></div>
                            </div>
                            <div>
                                <div class="info-child horizontal no-center">
                                    <img src="https://nuuk-e3eaa.firebaseapp.com/assets/img/phone.svg" class="info-image left">
                                    <div>
                                        <h1 class="phone-text">
                                            phone Number
                                            <br>
                                        </h1>
                                        <p class="paragraph-white">
                                            01-4541889
                                        </p>
                                    </div>
                                </div>
                                <div class="info-child horizontal no-center">
                                    <img src="https://nuuk-e3eaa.firebaseapp.com/assets/img/clock.svg" class="info-image left">
                                    <div>
                                        <h1 class="phone-text">
                                            opening times
                                            <br>
                                        </h1>
                                        <p class="paragraph-white">
                                            Sun - Fri 9:00am - 5:00pm,<br>
                                            Saturday - Closed
                                        </p>
                                    </div>
                                </div>
                                <div class="info-child horizontal no-center">
                                    <img src="https://nuuk-e3eaa.firebaseapp.com/assets/img/mail.svg" class="info-image left">
                                    <div>
                                        <h1 class="phone-text">
                                            contact
                                            <br>
                                        </h1>
                                        <p class="paragraph-white">
                                            service@oceanstarcargo.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-margin">
                    <div class="row-flex verical reverse w-row">
                        <div class="w-col-7 w-col-stack">
                            <a href="index.html" class="brand normal w-nav-brand w--current">
                                <img src="assets/image/Ocean Star Logo.png" width="90" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>