
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Panel</title>

    <!-- Bootstrap Css -->
    <link href="{{'asset/css/bootstrap.css'}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->


    <!-- Common Css -->
    <link href="{{'asset/css/style.css'}}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->


    <!-- Nav Css -->
    <link rel="stylesheet" href="{{'asset/css/style4.css'}}">
    <!--// Nav Css -->


    <!-- Fontawesome Css -->
    <link href="{{'aset/css/fontawesome-all.css'}}" rel="stylesheet">
    <!--// Fontawesome Css -->
   
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1 style="font-size:20px;">
                    <a href="index.html">Student-panel</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
           
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashborad.php">
                        <i class="fa fa-user" id="cl"></i>STUDENT
                       

                    </a>
                </li>
               
                <li class="active">
                    <a href="dashborad.php">
                        <i class="fa fa-user" id="cl"></i>PDF FROM. Word Form
                     </a>
                </li>
               
            
                <li class="active">
                <a href="dashborad.php">
                        <i class="fa fa-user" id="cl"></i>EDIT-PROFILE
                       

                    </a>
                </li>
                <li class="active">
                    <a href="dashborad.php">
                        <i class="fa fa-user" id="cl"></i>CHANGE-PASSWORD
                       

                    </a>
                </li>
                <li class="active">
                    <a href="../online college.php">
                        <i class="fa fa-user" id="cl"></i>LOG-OUT
                       

                    </a>
                </li>
               
                </ul>

        
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"></h3>
                                        
                                    </div>
                                </div>
                              
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-thumbs-up mr-3"></i>Change Password</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="..\online college.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

            <div class="container-fluid">
                <center><h1 class="mb-4">STUDENT-PANEL</h1></center>
                <div class="row">
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between " style="background-color: #FF5733;">
                            <div class="s-l">
                            <a herf="NEWS.PHP"> <h5>WHAT THE NEWS</h5></a>
                            </div>
                            <div class="s-r">
                                <h6>
                                <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #11505e;">
                            <div class="s-l">
                               <a herf="#"> <h5>COURSE-DETAILS</h5></a>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-edit"></i>
                                </h6>
                            </div> 
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between " style="background-color: #921c53;">
                            <div class="s-l">
                                <a> <h5>DISCUSSION-BOARD</h5></a>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-user"></i>
                                </h6>
                            </div> 
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #6B3A6C;">
                            <div class="s-l">
                               <a href="course.php"> <h5>FEE-DEATAIL</h5></a>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-sign-out-alt"></i>
                                </h6>
                            </div>
                        </div>

                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #6B3A6C;">
                            <div class="s-l">
                                <h5>VIEW-RESULT</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-sign-out-alt"></i>
                                </h6>
                            </div>
                        </div>

                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #6B3A6C;">
                            <div class="s-l">
                                <h5>SYLLABAS</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-sign-out-alt"></i>
                                </h6>
                            </div>
                        </div>
                    </div>      
    
                    <!--SECEND--->
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between " style="background-color: #FF5733;">
                            <div class="s-l">
                                <h5>MODAL-PAPER</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-key"></i>
                                </h6>
                            </div>
                        </div>
               <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #11505e;">
                            <div class="s-l">
                                <h5> EXAMINTION SCHEDULES</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-users"></i>
                                                        </h6>
                            </div>
                        </div>
                       
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #11505e;">
                            <div class="s-l">
                                <h5>LIBARY-DETAIL</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-users"></i>
                                                        </h6>
                            </div>
                        </div>
                       
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #11505e;">
                            <div class="s-l">
                                <h5>EXAMINTION-DETAILS</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-users"></i>
                                                        </h6>
                            </div>
                        </div>
                       

                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #11505e;">
                            <div class="s-l">
                                <h5>FEEDBACK</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-users"></i>
                                                        </h6>
                            </div>
                        </div>
                       
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #11505e;">
                            <div class="s-l">
                                <h5>SETTING</h5>

                            </div>
                            <div class="s-r">
                                <h6>
                                    <i class="fas fa-users"></i>
                                                        </h6>
                                                        
                            </div>
                        </div>
    
    </div>
    <div class="container-fluid">
    <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2021 Online college managament . By mt | Design by
                    <a href="#"> Ajay Kuamr </a>
                </p>
            </div>
    </div>

    <!-- Required common Js -->
 

</body>

</html>