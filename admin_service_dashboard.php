<?php
include("data_class.php");
//session_start();

$adminid=$_SESSION['adminid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="page.css">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <title>School Management System</title>
</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">ABC School</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">The Ideal Classroom Management Software</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">School Management System</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">ABC School</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Classifications</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/student.svg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/Teacher.svg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/Exam.svg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/Subject.svg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/Assignment.svg" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row vertical-align">
                    <div class="col-lg-4 ms-auto"><p class="lead">This is a Database Management Software created to manage the different databases that may come into action to store information and details about various aspects of the ABC School.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">The main aspects that this software looks to dive into is the databases of sectors such as Students learning in this particular School, Teachers teaching in this School, Subjects being taught, Exams that are conducted and the Assignments that are assigned to the Student of this School.</p></div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Ramavarmapuram, Thrissur
                            <br />
                            Kerala , P.O. 111111
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Learn More About Us !</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Student Data</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/student.svg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <br>
                                    <button> Add Student</button>
                                    <form action="addstudent_page.php" method="post" enctype="multipart/form-data">
                                    <label>First name:</label><input type="text" name="addfname"/>
                                    </br>
                                    <label>Middle name:</label><input type="text" name="addmname"/>
                                    </br>
                                    <label>Last name:</label><input type="text" name="addlname"/>
                                    </br>
                                    <label>Phone:</label><input type="number" name="addphone"/>
                                    </br>
                                    <label>Gender:</label><input type="text" name="addsex"/>
                                    </br>
                                    <label>Date of Birth:</label><input type="date" name="adddob"/>
                                    </br>
                                    <label>Address:</label><input type="text" name="addadd"/>
                                    </br>
                                    <label>Student ID:</label><input type="text" name="addstudid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <button>Remove Student</button>
                                    <form action="substudent_page.php" method="post" enctype="multipart/form-data">
                                    <label>Student ID:</label><input type="text" name="substudid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <?php

                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewstud();
                                        $recordset=$u->viewstud();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>Student ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Phone Number</th><th>Gender</th><th>Date Of Birth</th><th>Address</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[7]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="<td>$row[3]</td>";
                                            $table.="<td>$row[4]</td>";
                                            $table.="<td>$row[5]</td>";
                                            $table.="<td>$row[6]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">Student Data !!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Teacher Data</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/teacher.svg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <br>
                                    <button> Add Teacher</button>
                                    <form action="addteacher_page.php" method="post" enctype="multipart/form-data">
                                    <label>First name:</label><input type="text" name="addfname"/>
                                    </br>
                                    <label>Middle name:</label><input type="text" name="addmname"/>
                                    </br>
                                    <label>Last name:</label><input type="text" name="addlname"/>
                                    </br>
                                    <label>Date of Employment:</label><input type="date" name="adddoe"/>
                                    </br>
                                    <label>Address:</label><input type="text" name="addadd"/>
                                    </br>
                                    <label>Salary:</label><input type="number" name="addsal"/>
                                    </br>
                                    <label>Teacher ID:</label><input type="text" name="addtid"/>
                                    </br>
                                    <label>Subject ID:</label><input type="text" name="addtsubid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <button>Remove Teacher</button>
                                    <form action="subteacher_page.php" method="post" enctype="multipart/form-data">
                                    <label>Teacher ID:</label><input type="text" name="subtid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <?php
                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewteac();
                                        $recordset=$u->viewteac();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>Teacher ID</th><th>Subject ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Date Of Employment</th><th>Address</th><th>Salary</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[6]</td>";
                                            $table.="<td>$row[7]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="<td>$row[3]</td>";
                                            $table.="<td>$row[4]</td>";
                                            $table.="<td>$row[5]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">Teacher Data !!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Exam Details</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/exam.svg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <br>
                                    <button> Add Exam</button>
                                    <form action="addexam_page.php" method="post" enctype="multipart/form-data">
                                    <label>Exam ID:</label><input type="text" name="addeid"/>
                                    </br>
                                    <label>Exam Date:</label><input type="date" name="addedate"/>
                                    </br>
                                    <label>Exam Mark:</label><input type="int" name="addemark"/>
                                    </br>
                                    <label>Exam Attendance:</label><input type="int" name="addeatt"/>
                                    </br>
                                    <label>Student ID:</label><input type="text" name="addestudid"/>
                                    </br>
                                    <label>Subject ID:</label><input type="text" name="addesubid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <button>Update Exam Details</button>
                                    <form action="updateexam_page.php" method="post" enctype="multipart/form-data">
                                    <label>Exam ID:</label><input type="text" name="upeid"/>
                                    </br>
                                    <label>Exam Date:</label><input type="date" name="upedate"/>
                                    </br>
                                    <label>Exam Mark:</label><input type="int" name="upemark"/>
                                    </br>
                                    <label>Exam Attendance:</label><input type="int" name="upeatt"/>
                                    </br>
                                    <label>Student ID:</label><input type="text" name="upestudid"/>
                                    </br>
                                    <label>Subject ID:</label><input type="text" name="upesubid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <button>Remove Exam</button>
                                    <form action="subexam_page.php" method="post" enctype="multipart/form-data">
                                    <label>Exam ID:</label><input type="text" name="subeid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <?php
                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewexam();
                                        $recordset=$u->viewexam();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>Exam ID</th><th>Exam Date</th><th>Exam Mark</th><th>Exam Attendance</th><th>Student Id</th><th>Subject ID</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="<td>$row[3]</td>";
                                            $table.="<td>$row[4]</td>";
                                            $table.="<td>$row[5]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <br>
                                    <br>
                                    <?php
                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewunder();
                                        $recordset=$u->viewunder();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>Student ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Number of Times</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="<td>$row[3]</td>";
                                            $table.="<td>$row[4]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <br>
                                    <br>
                                    <?php
                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewmax();
                                        $recordset=$u->viewmax();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>First Name</th><th>Middle Name</th><th>Last Name</th><th>Exam ID</th><th>Student ID</th><th>Exam Mark</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="<td>$row[3]</td>";
                                            $table.="<td>$row[4]</td>";
                                            $table.="<td>$row[5]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">Exam Details !!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Subject Details</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/subject.svg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <br>
                                    <button> Add Subject</button>
                                    <form action="addsubject_page.php" method="post" enctype="multipart/form-data">
                                    <label>Subject ID:</label><input type="text" name="addsubid"/>
                                    </br>
                                    <label>Subject Name:</label><input type="text" name="addsubname"/>
                                    </br>
                                    <label>Subject Credit:</label><input type="text" name="addsubcred"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <button>Update Subject Details</button>
                                    <form action="updatesub_page.php" method="post" enctype="multipart/form-data">
                                    <label>Subject ID:</label><input type="text" name="upsubid"/>
                                    </br>
                                    <label>Subject Name:</label><input type="text" name="upsubname"/>
                                    </br>
                                    <label>Subject Credit:</label><input type="int" name="upsubcred"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <?php
                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewsub();
                                        $recordset=$u->viewsub();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>Subject ID</th><th>Subject Name</th><th>Subject Credits</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">Subject Details !!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Assignment Details </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/assignment.svg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <br>
                                    <br>
                                    <button> Add Assignment</button>
                                    <form action="addassi_page.php" method="post" enctype="multipart/form-data">
                                    <label>Assignment Status:</label><input type="int" name="addastat"/>
                                    </br>
                                    <label>Assignment Due:</label><input type="date" name="addadue"/>
                                    </br>
                                    <label>Assignment Mark:</label><input type="int" name="addamark"/>
                                    </br>
                                    <label>Student ID:</label><input type="text" name="addastudid"/>
                                    </br>
                                    <label>Subject ID:</label><input type="text" name="addasubid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <button>Update Assignment Details</button>
                                    <form action="updateassi_page.php" method="post" enctype="multipart/form-data">
                                    <label>Assignment Status:</label><input type="int" name="upastat"/>
                                    </br>
                                    <label>Assignment Due:</label><input type="date" name="upadue"/>
                                    </br>
                                    <label>Assignment Mark:</label><input type="int" name="upamark"/>
                                    </br>
                                    <label>Student ID:</label><input type="text" name="upastudid"/>
                                    </br>
                                    <label>Subject ID:</label><input type="text" name="upasubid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <button>Remove Assigmnent</button>
                                    <form action="subassi_page.php" method="post" enctype="multipart/form-data">
                                    <label>Student ID:</label><input type="text" name="subastudid"/>
                                    </br>
                                    <label>Subject ID:</label><input type="text" name="subasubid"/>
                                    </br>
                                    <input type="submit" value="SUBMIT"/>
                                    </form>
                                    <br>
                                    <br>
                                    <?php
                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewassi();
                                        $recordset=$u->viewassi();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>Assigment Status</th><th>Assignment Due Date</th><th>Assignment Mark</th><th>Student ID</th><th>Subject ID</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="<td>$row[3]</td>";
                                            $table.="<td>$row[4]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <br>
                                    <br>
                                    <?php
                                        $u=new data;
                                        $u->setconnection();
                                        $u->viewnoassi();
                                        $recordset=$u->viewnoassi();

                                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='border: 1px solid #dd;
                                        padding: 8px;'>Assigment Status</th><th>Assignment Due Date</th><th>Assignment Mark</th><th>Student ID</th><th>Subject ID</th></tr>";
                                        foreach($recordset as $row){
                                            $table.="<tr>";
                                            "<td>$row[0]</td>";
                                            $table.="<td>$row[0]</td>";
                                            $table.="<td>$row[1]</td>";
                                            $table.="<td>$row[2]</td>";
                                            $table.="<td>$row[3]</td>";
                                            $table.="<td>$row[4]</td>";
                                            $table.="</tr>";
                                            // $table.=$row[0];
                                        }
                                        $table.="</table>";

                                        echo $table;
                                    ?>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4">Assignment Details !!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>


</html>