<?php include('config/constants.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <title>Document</title>
</head>
<body>
    <!--Navbar section start-->
    <header>
   <nav>
    <div class="container">
      
        <div class="logo">
         <a href="<?php echo SITEURL;?>"><img src="images/logo2-removebg-preview.png" alt="Restaurant logo" class="img-responsive"></a>
        </div>

        <div class="menu text-right">
         <ul>
             <li>
                 <a href="<?php echo SITEURL;?>ownerfood.php" style="margin-right:10px;">Home</a>
             </li>
            <?php
            if(!isset($_SESSION['username'])){
                ?>
                <li>
                <a href="<?php echo SITEURL;?>login.php">Login/Register</a>
            </li>
            <?php
            }
            else{
                ?>
            <li>
                <a href="<?php echo SITEURL;?>logout.php">Logout</a>
            </li>
            <?php
            }
            ?>
            
         </ul>

         <div class="mobile-menu">
             <span onclick="openNav()">&#9776;</span>
             <div id="myNav" class="overlay">
             <a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
             <div class="overlay-content">
                <a onclick="closeNav()" href="<?php echo SITEURL;?>">Home</a>
               
                <?php
            if(!isset($_SESSION['username'])){
                ?>
                <a onclick="closeNav()" href="<?php echo SITEURL;?>login.php">Login/Register</a>
                <?php
            }
            else{
                ?>
    
                <a onclick="closeNav()" href="<?php echo SITEURL;?>logout.php">Logout</a>
                <?php
            }
            ?>
               </div>
            </div>
            </div>
        </div>
   
        <div class="clearfix"></div>
    </nav>
</div>

    </header>