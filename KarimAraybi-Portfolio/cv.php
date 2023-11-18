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
           KarimAraybi-CV
        </title>
        
        <link rel="stylesheet" href="cv-style.css">
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
                            <a href="gallery.php">
                                <li></i>Gallery</li>
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
        </div>

        <div id="page-content">

            <div class="container">

                <div class="section" id="section1">
                    <div class="container-title" id="container-title1">
                        <h1 class="title">Education</h1>
                    </div>

                        <div class="section-content">

                            <div><span class="section-content-title">Lebanese American University</span><span class="date">2021-2024</span></div>
                            <div class="content">Bachelor of Science in Computer Science</div>
                            <div class="content">CGPA: 3.5</div>
                            
                            <hr class="red-line">

                            <div><span class="section-content-title">Ecole Notre Dame Mouseitbeh</span><span class="date">2021</span></div>
                            <div class="content">Lebanese Baccalaureate in General Sciences</div>
                            <div class="content">Grade: 17</div>
                            
                        </div>

                        <div class="container-title" id="container-title1">
                            <h1 class="title" style="margin-top: 15%;">Skills and Languages</h1>
                        </div>

                        <div class="section-content">
                            
                            <div style="margin-top: 10px;"><span class="content">Computer Skills: Unity, Oracle, Arduino, .Net, Intel FPGA, Linux and Virtual Machines.</span></div>
                            <div style="margin-top: 10px;"><span class="content">Programming languages: Python, Java, C, C#, C++, SQL, HTML, CSS, JavaScript and MIPS.</span></div>
                            <div style="margin-top: 10px;"><span class="content">Languages: English, French, and Arabic</span></div>
                            
                        </div>

                </div>

                <div class="section" id="section2">
                    <div class="container-title" id="container-title2">
                        <h1 class="title">Experience</h1>
                    </div>

                    <div class="section-content">

                            <div><span class="section-content-title">WAKILNI</span><span class="date">Sept 2023 - Present</span></div>
                            <div class="content">Machine Learning Intern</div>
                            <ul>
                                <li>Implemented transformer models to translate from Arabizi to Arabic and do sentiment analysis on customer reviews</li>
                                <li>Researched and tested various APIs including GPT3.5/4 and RosetteAPI</li>
                            </ul>

                            <hr class="yellow-line">

                            <div><span class="section-content-title">WAKILNI</span><span class="date">Jul 2023-Sept 2023</span></div>
                            <div class="content">RFID Intern</div>
                            <ul>
                                <li>Researched, tested and developed a full RFID solution allowing the company to keep track of all packages inside the warehouse</li>
                            </ul>

                            <hr class="yellow-line">

                            <div><span class="section-content-title">Integrated Digital Systems</span><span class="date">Jul 2023-Sept 2023</span></div>
                            <div class="content">Full Stack Web Developement Intern</div>
                            <ul>
                                <li>Created a fully functional website using .Net, C#, HTML, CSS and JavaScript</li>
                            </ul>
                    </div>

                </div>

                <div class="section" id="section3">
                    <div class="container-title" id="container-title3">
                        <h1 class="title">Projects</h1>
                    </div>

                    <div class="section-content">
                        <div><span class="section-content-title">Parallel Programming Project</span></div>
                            <ul>
                                <li>Parallelized different layers of a Convolutional Neural Network for Hand-Written Digit Recognition using MPI, 
                                    OpenMP and CUDA.</li>
                            </ul>

                            <hr class="blue-line">

                            <div><span class="section-content-title">Game Development Project</span></div>
                            <ul>
                                <li>Designed and built a 2D platformer adventure game using Unity and Created engaging levels and mechanics.</li>

                            </ul>

                            <hr class="blue-line">

                            <div><span class="section-content-title">Software Engineering Project</span></div>
                            <ul>
                                <li>Gathered user/system requirements and specification then designed an e-commerce website.</li>
                                <li>Implemented and tested various components/pages of the website.</li>
                            </ul>

                            <hr class="blue-line">

                            <div><span class="section-content-title">Database Management Systems Project</span></div>
                            <ul>
                                <li>Designed and implemented a fully functional pet store database using Oracle and SQL.</li>
                            </ul>
                    </div>
                    </div>

                </div>

            </div>

        </div>


    </body>
</html>
