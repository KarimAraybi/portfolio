<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit();
}

?>



<html>
    <head>
        <title>
            Gallery
        </title>
        <link rel="stylesheet" href="gallery-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div>
            <div id="page-header">
                <div id="dropdown-menu">
                    <span>MENU</span>
                    <div class="dropdown-content">
                        <ul>
                            <a href="home.php">
                                <li></i>Main Page</li>
                            </a>
                            <a href="cv.php">
                                <li>My CV</li>
                            </a>
                            <a href="contact.php">
                                <li>Contact Me</li>
                            </a>
                        </ul>
                    </div>

                
            </div>
            <span class="header-content" id="name">KarimAraybi<i class="fa fa-terminal" style="color: rgb(57, 172, 22); font-size: 20px; padding-left: 5px;"></i></span>
                <span class="header-content" id="number"><i class="fa fa-phone" style="color: rgb(255, 255, 255); font-size: 20px; padding-right: 5px;"></i>+961 70-088873</span>
                <span class="header-content" id="email"><i class="fa fa-envelope" style="color: rgb(255, 255, 255); font-size: 20px; padding-right: 5px;"></i>karim.araybi@lau.edu</span>
        </div>

        <div class="container">
            

            <div class="img-frame">
                
                <img src="image1.jpg" class="my-img" tabindex="0" >
                <img src="image1.jpg" class="bigImg" id="bigIMG1">
                
            </div>
            <div class="img-frame">
                
                <img src="image2.jpg" class="my-img" tabindex="0" >
                <img src="image2.jpg" class="bigImg" id="bigIMG2">
                
            </div>
            <div class="img-frame">
            
                <img src="image3.jpg" class="my-img"  tabindex="0">
                <img src="image3.jpg" class="bigImg" id="bigIMG3">
                
            </div>

            
            
            
            


            
        </div>
    </body>
</html>