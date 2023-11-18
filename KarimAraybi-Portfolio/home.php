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
           KarimAraybi-MainPage
        </title>
        
        <link rel="stylesheet" href="index-style.css">
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
                            <a href="cv.php">
                                <li>My CV</li>
                            </a>
                            <a href="gallery.php">
                                <li>Gallery</li>
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

        <div id="page-content">
            <div class="section">
                <div class="container-title">
                    <h1 class="title">Karim Araybi</h1>
                </div>
                <div class="section-content">
                    Hello, my name is Karim Araybi, a senior Computer Science student at the Lebanese American University and a Machine Learning Intern at Wakilni, if you would like to know more about me please click on the menu at the top left of the page.
                </div>
        
                        
               </div>


            </div>
           

        </div>


    </body>
</html>
