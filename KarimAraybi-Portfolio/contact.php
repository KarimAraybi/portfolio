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
           KarimAraybi-Contact Me
        </title>
        
        <link rel="stylesheet" href="contact-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>
        <div>
            <div id="page-header">
                <div id="dropdown-menu">
                    <span><i class="ico burger-ico"></i>MENU</span>
                    <div class="dropdown-content">
                        <ul>
                            <a href="home.php">
                                <li>Main Page</li>
                            </a>
                            <a href="cv.php">
                                <li>CV</li>
                            </a>
                            <a href="gallery.php">
                                <li></i>Gallery</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <span class="header-content" id="name">KarimAraybi<i class="fa fa-terminal" style="color: rgb(57, 172, 22); font-size: 20px; padding-left: 5px;"></i></span>
                <span class="header-content" id="number"><i class="fa fa-phone" style="color: rgb(255, 255, 255); font-size: 20px; padding-right: 5px;"></i>+961 70-088873</span>
                <span class="header-content" id="email"><i class="fa fa-envelope" style="color: rgb(255, 255, 255); font-size: 20px; padding-right: 5px;"></i>karim.araybi@lau.edu</span>
            </div>
        </div>

        <div id="page-content">

            <div class="container">

                <div class="section" id="section1">
                    <div class="container-title" id="container-title1">
                        <h1 class="title">LinkedIn</h1>
                    </div>

                        <div class="section-content">
                            <img src="../images/linkedin.png" class="image" alt="Linked in image">
                            <a href="https://www.linkedin.com/in/karimaraybi/" class="button" id="button1">Click Here</a>
                        </div>
                </div>

                <div class="section" id="section2">
                    <div class="container-title" id="container-title2">
                        <h1 class="title">Email</h1>
                    </div>

                    <div class="section-content">
                        <img src="../images/email.png" class="image" alt="Linked in image">
                            <a href="mailto:karim.araybi@lau.edu" class="button" id="button2">Click Here</a>
                    </div>

                </div>

                <div class="section" id="section3">
                    <div class="container-title" id="container-title3">
                        <h1 class="title">GitHub</h1>
                    </div>

                    <div class="section-content">
                        <img src="../images/github.png" class="image" alt="Github image">
                        <a href="https://github.com/KarimAraybi" class="button" id="button3">Click Here</a>
                    </div>

                </div>

            </div>

        </div>


    </body>
</html>
