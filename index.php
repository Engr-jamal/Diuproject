<?php
include ("DB/conn.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="icon" href="img/icon.png">

    <link rel="stylesheet" href="css/rotating-card.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>DIU ISS!
    </title>
</head>
<style>

    ul.timeline {
        list-style-type: none;
        position: relative;
    }
    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }
    ul.timeline > li {
        margin: 20px 0;
        padding-left: 20px;
    }
    ul.timeline > li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }

</style>
<body>
<!-- Nav Start  -->
<section class="navBarSection">
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <a class="navbar-brand" href="index.php">
            <img class="iconLogo" src="img/diuIcon.png" height="50" width="50">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav m-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-white p-3" href="">Home
                        <span class="sr-only">(current)
                </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-3 " href="">Notices
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-3" href="">Testimonial
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white p-3" href="">About
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white p-3" href="#" id="dropdownId" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Sign In
                    </a>
                    <div class="dropdown-menu bg-info" aria-labelledby="dropdownId">
                        <a class="dropdown-item " href="ADMIN/adminLogin.php" >Admin
                        </a>
                        <a class="dropdown-item " href="MENTOR/mentorLogin.php">Mentor
                        </a>
                        <a class="dropdown-item " href="STUDENT/studentLogin.php" >Students
                        </a>
                        <a class="dropdown-item " href="PARENT/parentLogin.php">Prentice
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!-- Nav End -->
<!-- Notice Start -->
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container text-center">
        <h1 class="display-3">Notices! Notices! Notices!
        </h1>
        <hr class="my-2">
        <p class="lead text-black-50">
            <?php
            $sql = mysqli_query($mysql, "SELECT * FROM  notices ORDER BY id DESC LIMIT 1");
            $print_data = mysqli_fetch_array($sql);
            echo $print_data[1];
            //                $sql = "SELECT * FROM notices";
            //                $query = mysqli_query($mysql,$sql);
            //                $row = mysqli_fetch_array($query);
            //                echo $row['description'];
            ?>
        </p>
        <a class="btn btn-success btn-lg" href="Jumbo action link" role="button">More info
        </a>
    </div>
</div>
<!-- Notice End -->
<!-- Testimonial Start -->
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="img/rotating_card_thumb2.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="img/jamal.jpg"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Jamal Sheikh Ali
                                    </h3>
                                    <p class="profession">
                                    <p class="text-center">Developer</p>
                                    </p>
                                    <p class="text-center">"I'm Jamal, I have more than 7 years experiences  both (Front-end Back-end), React native app & UXD."
                                    </p>
                                </div>
                                <div class="footer ">
                                    <i class="text-dark">
                                    </i>
                                </div>
                            </div>
                        </div>
                        <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"I'm Seeking for my client opportunities to build web and Native apps with beautiful designs   "
                                </h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Experience Description
                                    </h4>
                                    <p class="text-center">
                                        More than 7 years web developing both (Front-end Back-end) , react native app & UXD. I prefer to publish my projects before the deadline with best quality
                                    </p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4 class="text-dark">30+
                                            </h4>
                                            <p>
                                                Web Projects
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>41+
                                            </h4>
                                            <p>
                                                Mobile Apps
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>200+
                                            </h4>
                                            <p>
                                                Logo
                                            </p>
                                        </div>
                                    </div>

                                    <div class="stats-container ">
                                        <div class="stats bg-info text-white">
                                            <h4>162
                                            </h4>

                                        </div>
                                        <div class="stats bg-info text-white">
                                            <h4>35
                                            </h4>

                                        </div>
                                        <div class="stats bg-info text-white ">
                                            <h4>1621
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook fa-fw">
                                        </i>
                                    </a>
                                    <a href="#" class="google">
                                        <i class="fa fa-google-plus fa-fw">
                                        </i>
                                    </a>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter fa-fw">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end back panel -->
                    </div>
                    <!-- end card -->
                </div>

                <!-- end card-container -->
            </div>
            <div class="col-lg-4">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="img/rotating_card_thumb2.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="img/omar.jpg"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Omar Abdirahman
                                    </h3>
                                    <p class="profession">
                                    <p class="text-center">Developer</p>
                                    </p>
                                    </p>
                                    <p class="text-center">"I'm Omar, and since I made it here I can make it
                                        anywhere, yeah, they love me everywhere"
                                    </p>
                                </div>
                                <div class="footer">
                                    <i class="fa fa-mail-forward">
                                    </i>
                                </div>
                            </div>
                        </div>
                        <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class   ="motto">"To be or not to be, this is my awesome motto!"
                                </h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Job Description
                                    </h4>
                                    <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many
                                        others...
                                    </p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>235
                                            </h4>
                                            <p>
                                                Followers
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>114
                                            </h4>
                                            <p>
                                                Following
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>35
                                            </h4>
                                            <p>
                                                Projects
                                            </p>
                                        </div>
                                    </div>
                                    <div class="stats-container ">
                                        <div class="stats bg-info text-white">
                                            <h4>162
                                            </h4>

                                        </div>
                                        <div class="stats bg-info text-white">
                                            <h4>35
                                            </h4>

                                        </div>
                                        <div class="stats bg-info text-white ">
                                            <h4>1647
                                            </h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook fa-fw">
                                        </i>
                                    </a>
                                    <a href="#" class="google">
                                        <i class="fa fa-google-plus fa-fw">
                                        </i>
                                    </a>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter fa-fw">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end back panel -->
                    </div>
                    <!-- end card -->
                </div>

                <!-- end card-container -->
            </div>
            <div class="col-lg-4">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="img/rotating_card_thumb2.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="img/anwar.png"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Mr. Md. Anwar Hossen
                                    </h3>
                                    <p class="profession">
                                    <p class="text-center">Teacher Mentor </p>
                                    </p>
                                    <p class="text-center">"I am a Senior Lecturer in the Department of Software Engineering, Daffodil International University, Dhaka, Bangladesh."
                                    </p>

                                </div>

                            </div>
                        </div>
                        <!-- end front panel -->
                        <div class="back">
                            <div class="header">

                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Experience Description
                                    </h4>
                                    <p class="text-center">C++, Data Structure, Algorithm, Java, Web-Programming, Numerical Analysis, Operating System, .NET Programming, Digital Electronics, Statistics, Artificial Intelligence, Networking, Object Oriented Programming & Concept Design, Project, Thesis
                                    </p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>
                                            </h4>
                                            <p>

                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>
                                            </h4>
                                            <p>

                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>
                                            </h4>
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook fa-fw">
                                        </i>
                                    </a>
                                    <a href="#" class="google">
                                        <i class="fa fa-google-plus fa-fw">
                                        </i>
                                    </a>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter fa-fw">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end back panel -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>

                <!-- end card-container -->







<!-- Testimonial  End -->
<!-- About us Start -->
<div class="jumbotron bg-white jumbotron-fluid">
    <div class="container ">
        <h1 class="display-3 text-center">About us
        </h1>
        <p class="lead text-center">Project Overview
        </p>
        <hr class="my-2">
        DIU International student support is aimed to help and guide all international
        students enrolled DIU regarding their registration process and also it will assist
        them for their renewal or extension visa by showing the required documents and
        the applying process that they need to follow in order to get their visas easily.
        Moreover it provides the information of the enrolled students and their visa
        types, status and expiry date as well to the admin. In addition to that it has all the
        police officers numbers and names so every student can find his/her assigned
        officers easily and vice versa.
        The fact that one is able to check his/her assigned police officer and they can
        easily contact him by seeing his name, phone number, and office etc.) .
        Meanwhile officers can get their assigned students numbers, numbers and send
        notifications.
        This application is mainly for student’s aid. A student has to register in the system
        with his/her DIU provided ID then he/she can access the system.
        There is also an admin module where admin can add users, update and delete
        information about students and officers if there are no longer need.
        <hr class="my-2">
    </div>
</div>
<!-- Nav End -->
<!---->
<!--    <div class="container mt-5 mb-5">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <h2>Latest News</h2>-->
<!--                <ul class="timeline">-->
<!--                    <hr>-->
<!--                    <li>-->
<!--                     <h3>Done!</h3>-->
<!--                     <div class="float-right">21 March, 2014</div>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>-->
<!--                    </li>-->
<!---->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="text-muted mt-5 mb-5 text-center small">by : <a class="text-muted" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>-->
<!---->


<!-- footer -->
<section>
    <div class="card ">
        <div class="card-footer text-white text-center bg-info fixed-bottom">
            <p>&copy; Jamal Sheikh Ali & Omar Abdirahman
                <?php
                echo date("d-m-y");
                ?>
            </p>
        </div>
    </div>
</section>
<!-- /footer -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js">
</script>
<script src="js/popper.min.js">
</script>
<script src="js/bootstrap.bundle.min.js">
</script>
</body>
</html>
