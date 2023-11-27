<?php
$bgColor = "grey";
$color = "orange";
$name = "Golu Singh";
$designation = "Full Stack Developer";
$image = ""

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Portfolio - Mindflairr</title>
    <!-- MDB icon -->
    <link rel="shortcut icon" href="https://mindflairr.com/img/mindflairr_col_logo.png" type="image/x-icon">
    <!-- Flaticons -->
    <link rel="stylesheet"
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>


    <!-- caudex-Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caudex:ital,wght@1,700&family=Ubuntu&display=swap"
          rel="stylesheet">
    <!-- internal -Files -->
    <link rel="stylesheet" href="css/mdb.min.css"/>


    <style>
        @media only screen and (max-width: 768px) {
            body {
                background-repeat: repeat-y !important;
                height: 100% !important;
                background-size: contain !important;
            }

        }

        @media only screen and (max-width: 375px) {
            .progress {
                width: 75vw;
            }
        }

        .selected {
            border: 2px solid white;
        }

        .error-message {
            color: #a83232;
            display: none;
        }

        #InputImage {
            display: none;
        }
    </style>

</head>

<body
        style="background-image:url(/img/Background.png); background-repeat: repeat; height: 100vh; width: 100vw; background-size:cover; margin: 0%; padding: 0%;">

<!-- Main-section -->
<div class="container-fluid d-flex justify-content-center align-items-center"
     style="min-height: 100vh; width: 100vw; overflow-x: hidden;">
    <div class="container">

        <!-- First Row -->
        <div class="row  m-5 d-flex justify-content-between ">

            <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center rounded-6 text-center"
                 style=" background-color:<?php echo $bgColor; ?>;color: <?php echo $color; ?>;  box-shadow: inset 0 0 10px white; border: #ABABAB;">

                <a href="#" data-mdb-toggle="modal" data-mdb-target="#ProjectModal">
                    <img src="/img/Group 1.png" class="img-fluid">
                </a>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-12   m-2 p-3  rounded-6   d-flex justify-content-start flex-1"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; box-shadow: inset 0 0 10px white; border: #ABABAB;position: relative">

                <div>

                    <div class="d-flex position-relative">
                        <img
                                class=" mb-3 rounded-circle  "
                                style="height: 12vh;border:2px solid <?php echo $color; ?>;"
                                src="img/Yellow%20Inspiration%20Modern%20Instagram%20Profile%20Picture.png"
                                alt="Profile Image ">
                        <button type="button" class="btn btn-floating btn-sm  shadow-0" id="FileInput" style="margin-left: -30px; margin-top: 8.8vh;background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;" onclick="TakePhoto();"><i class="fi fi-ss-camera"></i></button>
                        <input type="file" accept="image/*" id="InputImage">

                    </div>

                    <p style="font-size: 1.5rem;color: <?php echo $color; ?>; margin: 2px; "> <?php echo "$name" ?>
                        <i class="fi fi-ss-pen-clip" style="font-size: small" data-mdb-toggle="modal"
                           data-mdb-target="#NameEdit"></i></p>

                    <p style="font-size: 1rem;color: <?php echo $color; ?>; margin: 2px;"><?php echo "$designation" ?>
                        <i class="fi fi-ss-pen-clip" style="font-size: small" data-mdb-toggle="modal"
                           data-mdb-target="#DesigEdit"></i></p>
                </div>

                <div style="position: absolute;right: 1vw; bottom: 0px;" data-mdb-toggle="modal"
                     data-mdb-target="#Protfoliomodal">
                    <i class="fi fi-sr-angle-small-right align-self-end fa-2x"></i>
                </div>
            </div>
            <!--                editNAme-->
            <div class="modal " id="NameEdit" tabindex="-1" aria-labelledby="NameEditLabel" aria-hidden="true"
                 data-mdb-backdrop="true" data-mdb-keyboard="true">

                <div class="modal-dialog modal-md modal-dialog-centered">

                    <div class="modal-content "
                         style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;">

                        <div class="modal-header border-bottom-0 d-flex justify-content-between">

                            <p class="modal-title"
                               style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;<?php echo $color; ?>;"
                               id="NameEditLabel">
                                Edit Name</p>
                            <button type="button" class="btn shadow-0"
                                    style="font-size:2rem; color: <?php echo $color; ?>;"
                                    data-mdb-dismiss="modal">X
                            </button>
                        </div>

                        <div class="modal-body">
                            <input type="text" id="editName" class="form-control rounded-8"
                                   placeholder="Enter Your Name"
                                   style="background-color:<?php echo $bgColor; ?> ;color:<?php echo $color ?>;"/>
                        </div>
                        <div class="modal-footer border border-top-0">
                            <button type="button" class="btn shadow-0" data-mdb-ripple-init data-mdb-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn " data-mdb-ripple-init
                                    style="background-color: <?php echo $color; ?>">Save changes
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!--            DesigEdit-->
            <div class="modal " id="DesigEdit" tabindex="-1" aria-labelledby="DesigEditLabel" aria-hidden="true"
                 data-mdb-backdrop="true" data-mdb-keyboard="true">

                <div class="modal-dialog modal-md modal-dialog-centered">

                    <div class="modal-content "
                         style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;">

                        <div class="modal-header border-bottom-0 d-flex justify-content-between">

                            <p class="modal-title"
                               style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;  color: <?php echo $color; ?>;"
                               id="DesigEditLabel">
                                Edit Name</p>
                            <button type="button" class="btn shadow-0"
                                    style="font-size:2rem; color: <?php echo $color; ?>;"
                                    data-mdb-dismiss="modal">X
                            </button>
                        </div>

                        <div class="modal-body">
                            <input type="text" id="editName" class="form-control rounded-8"
                                   placeholder="Enter Your Designation"
                                   style="background-color:<?php echo $bgColor; ?> ;color:<?php echo $color ?>;"/>
                        </div>
                        <div class="modal-footer border border-top-0">
                            <button type="button" class="btn shadow-0" data-mdb-ripple-init data-mdb-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn " data-mdb-ripple-init
                                    style="background-color: <?php echo $color; ?>">Save changes
                            </button>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3  d-flex justify-content-center align-items-center rounded-6 text-center"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; box-shadow: inset 0 0 10px white; border: #ABABAB;">
                <a href="#" data-mdb-toggle="modal" data-mdb-target="#SkillModal">
                    <img src="/img/Group 33.png" class="img-fluid">
                </a>
            </div>
        </div>


        <!-- Second-Row -->
        <div class="row m-5 d-flex justify-content-evenly ">
            <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center  rounded-6  text-center"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;  box-shadow: inset 0 0 10px white; border: #ABABAB;">
                <a href="#" data-mdb-toggle="modal" data-mdb-target="#certificates-modal">
                    <img src="/img/Group 3.png" class="img-fluid">
                </a>
            </div>

            <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center  rounded-6  text-center"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; box-shadow: inset 0 0 10px white; border: #ABABAB;">
                <a href="#" data-mdb-toggle="modal" data-mdb-target="#Educationmodal">
                    <img src="/img/Group 34.png" class="img-fluid">
                </a>
            </div>

            <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center rounded-6  text-center"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; box-shadow: inset 0 0 10px white; border: #ABABAB;">
                <a href="#" data-mdb-toggle="modal" data-mdb-target="#Aboutmodal">
                    <img src="/img/Group 5.png" class="img-fluid">
                </a>
            </div>
        </div>

        <!-- Third-Row -->
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">

                <button
                        type="button" class="  btn btn-lg m-lg-3 m-1 rounded-6 " data-mdb-toggle="modal"
                        data-mdb-target="#LinksModal"
                        style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;    border:2px dashed <?php echo $color; ?>">
                    <i class="fi fi-sr-add fa-2x"></i>
                </button>
                <!--LinksModal -->
                <div class="modal left fade" id="LinksModal" tabindex="-1" aria-labelledby="LinksModalLabel"
                     aria-hidden="true" data-mdb-backdrop="false" data-mdb-keyboard="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content "
                             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;">

                            <div class="modal-header border-bottom-0 d-flex justify-content-between">

                                <p class="modal-title"
                                   style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;  color: <?php echo $color; ?>;"
                                   id="LinksModalLabel">
                                    Add Link</p>
                                <button type="button" class="btn shadow-0"
                                        style="font-size:2rem; color: <?php echo $color; ?>;"
                                        data-mdb-dismiss="modal">X
                                </button>
                            </div>

                            <div class="modal-body">
                                <input type="url" id="link1" class="form-control rounded-8 m-2"
                                       placeholder="Enter Your Links"
                                       style="background-color:<?php echo $bgColor; ?> ;color:<?php echo $color ?>;"/>
                                <input type="url" id="link2" class="form-control rounded-8 m-2"
                                       placeholder="Enter Your Links"
                                       style="background-color:<?php echo $bgColor; ?> ;color:<?php echo $color ?>;"/>
                                <input type="url" id="link3" class="form-control rounded-8 m-2"
                                       placeholder="Enter Your Links"
                                       style="background-color:<?php echo $bgColor; ?> ;color:<?php echo $color ?>;"/>
                                <input type="url" id="link4" class="form-control rounded-8 m-2"
                                       placeholder="Enter Your Links"
                                       style="background-color:<?php echo $bgColor; ?> ;color:<?php echo $color ?>;"/>
                                <p id="hostname1"></p>
                                <p id="hostname2"></p>
                                <p id="hostname3"></p>
                                <p id="hostname4"></p>

                            </div>
                            <div class="modal-footer border border-top-0">
                                <button type="button" class="btn shadow-0" data-mdb-ripple-init
                                        data-mdb-dismiss="modal">Close
                                </button>
                                <button type="button" class="btn " onclick="AddLinks()" data-mdb-ripple-init
                                        style="background-color: <?php echo $color; ?>">ADD
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 d-flex justify-content-evenly align-items-center">
                <button
                        type="button" class=" w-75 btn btn-lg  m-2 rounded-6"
                        style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;
                                font-size: 1.3rem;
                                ">
                    Home
                </button>
                <button
                        type="button" class="w-100 btn btn-lg rounded-6 "
                        style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;font-size: 1.3rem;">
                    CREATE YOUR PORTFOLIO

                </button>
            </div>
        </div>
    </div>
</div>


<!-- MODALS -->


<!-- Projects-Model -->
<div class="modal " id="ProjectModal" tabindex="-1" aria-labelledby="ProjectModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content "
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;">

            <div class="modal-header border-bottom-0 d-flex justify-content-end" style="border: 1px solid #ABABAB;">

                <button type="button" class="btn shadow-0" style="font-size:3rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>
            <div class="modal-header border-bottom-0 d-flex justify-content-start">
                <img src="/img/Group 1.png" style="width: 10vw;" alt="">
                <p class="modal-title  ms-3 trial "
                   style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; font-size: 4vw; color: <?php echo $color; ?>;"
                   id="ProjectModalLabel">
                    Projects</p>
            </div>

            <div class="modal-body  p-5 ">

                <div id="myCarousel1" class="carousel slide text-center" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row flex-row ">
                                    <!-- Place your cards here -->
                                    <!-- First-Card -->
                                    <div class="col-lg-4 col-12 p-3 g-4">
                                        <div class="card rounded-0 shadow-0"
                                             style="flex: 0 0 auto; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;">
                                            <div class="card-header rounded-0 d-flex justify-content-between p-3 "
                                                 style="border:1px solid #ABABAB;">
                                                <i class="fas fa-laptop-code" style="color: <?php echo $color; ?>;"></i>
                                                <i class="fas fa-2x fa-angle-right" style="C " data-mdb-toggle="modal"
                                                   data-mdb-target="#ViewModal"></i>
                                            </div>
                                            <div class="card-body " style="border:1px solid #ABABAB;">
                                                <p class="card-text " style="color: <?php echo $color; ?>; ">
                                                    Enhancing user Journey:<br> Mobile App Re-Design
                                                </p>
                                            </div>
                                            <div class="card-footer rounded-0 text-muted d-flex justify-content-between "
                                                 style="color: <?php echo $color; ?>; border:1px solid #ABABAB;">23rd
                                                Dec 2022 - 28th Dec 2022


                                                <i class="fi fi-ss-menu-dots-vertical  dropdown me-1"
                                                   id="dropdownMenuButton"
                                                   data-mdb-toggle="dropdown" aria-expanded="false"
                                                   style="color: <?php echo $color; ?>;">

                                                </i>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#" data-mdb-toggle="modal"
                                                           data-mdb-target="#editModal">
                                                            <i class="fas fa-pen me-2"></i> Edit </a></li>

                                                    <li><a class="dropdown-item" href="#" data-mdb-toggle="modal"
                                                           data-mdb-target="#DeleteModal"> <i
                                                                    class="fas fa-trash-can me-2"></i> Delete</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- for creating new projects -->
                                    <div class="col-lg-4 col-12 p-3 g-4">
                                        <div class="card rounded-0 shadow-0 w-full h-100"
                                             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

                                            <div class="card-body  d-flex justify-content-center align-items-center"
                                                 style="border:2px dashed #ABABAB;">
                                                <div data-mdb-toggle="modal" data-mdb-target="#UpdateModal">
                                                    <i class="fi fi-ss-add fa-2x"
                                                       style="color: <?php echo $color; ?>;"></i>
                                                    <p class="card-text " style="color: <?php echo $color; ?>;">
                                                        Add Project
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Additional items go here -->
                        </div>
                        <!-- Navigation Buttons -->
                        <button class="carousel-control-prev" type="button" style="margin-left:-8%"
                                data-bs-target="#myCarousel1"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next " type="button" style="margin-right:-8%"
                                data-bs-target="#myCarousel1" data-bs-slide="next">
                            <span class="carousel-control-next-icon " aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!--Delete Project Modal -->
<div class="modal top fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Project Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn" style="background-color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">
                    yes
                </button>
                <button type="button" class="btn shadow-0">No</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Project Modal -->
<div class="modal top fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="editModalLabel">Edit Project</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <p class="error-message" id="messageIcon2">Please Select any icon</p>
                <p class="error-message" id="messageProject2">Enter Project title</p>
                <p class="error-message" id="MessageDate2">Enter Starting date</p>
                <!-- choose-icon -->
                <small>Choose icon</small>
                <div class="row d-flex">
                    <div class="col-12 container m-2">

                        <button class="btn btn-floating m-1" id="setting" name="icon" value="setting"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-gears fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="computer" name="icon" value="computer"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-display-code fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="draw" name="icon" value="draw"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-palette fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="mobile" name="icon" value="mobile"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-mobile-button fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="book" name="icon" value="book"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-book-spells fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="comment" name="icon" value="comment"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-comments fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="chart" name="icon" value="chart"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-chart-line-up fa-xl"></i>
                        </button>
                    </div>
                </div>
                <!--  project-title -->
                <input type="text" class="form-control rounded-8" id="titles"
                       style="background-color: <?php echo $color; ?>;" placeholder=" Project-title"/>
                <div class="row mt-2">
                    <small>Project Duration</small>
                    <div class="col-lg-6 col-6 mt-1">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_start"
                                   data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_end"
                                   data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" onclick="EditProjectModal();" class="btn "
                        style="background-color: <?php echo $color; ?>;">Update
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Add-Project -->
<div class="modal top fade" id="UpdateModal" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="UpdateModalLabel">Add Project</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <!-- choose-icon -->
                <div>
                    <p class="text-danger" id="error_message"></p>

                </div>
                <p>Choose icon</p>
                <div class="row d-flex">
                    <div class="col-12 container m-2">

                        <button class="btn btn-floating m-1" id="setting" name="icon" value="setting"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-gears fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="computer" name="icon" value="computer"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-display-code fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="draw" name="icon" value="draw"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-palette fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="mobile" name="icon" value="mobile"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-mobile-button fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="book" name="icon" value="book"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-book-spells fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="comment" name="icon" value="comment"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-comments fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="chart" name="icon" value="chart"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;">
                            <i class="fi fi-ss-chart-line-up fa-xl"></i>
                        </button>
                        <input type="hidden" id="Project_icons">
                    </div>


                </div>
                <!--  project-title -->
                <input type="text" class="form-control rounded-8" id="title"
                       style="background-color: <?php echo $color; ?>;"
                       placeholder="Project Title"/>

                <!-- project-duration -->

                <div class="row mt-2">
                    <small>Project Duration</small>
                    <div class="col-lg-6 col-6 mt-1">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_start"
                                   data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_end"
                                   data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0">

                <button type="button" onclick="AddProjectModal();" class="btn mx-auto"
                        style="background-color: <?php echo $color; ?>;">CREATE
                </button>
            </div>
        </div>
    </div>
</div>

<!--  View Project-->
<div class="modal top fade" id="ViewModal" tabindex="-1" aria-labelledby="ViewModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="ViewModalLabel">View Project</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

            </div>
            <div class="modal-footer border-top-0">

                <button type="button" class="btn align-self-end" style="background-color: <?php echo $color; ?>;">
                    CLOSE
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Skills-Modal -->
<div class="modal top fade" id="SkillModal" tabindex="-1" aria-labelledby="SkillModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content "
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid #ABABAB;">

            <div class="modal-header border-bottom-0 d-flex justify-content-end" style="border: 1px solid #ABABAB;">

                <button type="button" class="btn shadow-0 " style="font-size:3rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>

            <div class="modal-header border-bottom-0 d-flex justify-content-start">
                <img src="/img/Group 33.png" style="width: 10vw;" alt="">
                <p class="modal-title  ms-3  " style="font-size: 4vw; color: <?php echo $color; ?>;"
                   id="SkillModalLabel">
                    Skills</p>
            </div>
            <div class="modal-body">

                <ul class="list-group ">
                    <li class="list-group-item shadow-0 border border-0"
                        style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                        <div class="row d-flex align-items-center ">
                            <div class="col-lg-6 d-flex">
                                <i class="fi fi-bs-dot-circle fa-2x" style="color: <?php echo $color; ?>;"></i>
                                <p class=" ps-1" style="font-size: 1.5rem; color: <?php echo $color; ?>;">Illustrator
                                    <i class="fi fi-ss-pen-clip fa-xs" data-mdb-toggle="modal"
                                       data-mdb-target="#UpdateSkillModal"></i>
                                    <i class="fi fi-ss-cross-small fa-xs" data-mdb-toggle="modal"
                                       data-mdb-target="#DeleteSkillModal"></i>
                                </p>
                            </div>
                            <div class="col-lg-6 w-50">
                                <div class="progress "
                                     style="height: 3vh; background: transparent;border:1px solid #ABABAB;">
                                    <div class="progress-bar  text-dark" role="progressbar"
                                         style="width: 85%; background-color: <?php echo $color; ?>;" aria-valuenow="85"
                                         aria-valuemin="0"
                                         aria-valuemax="100">85%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <!-- for creating new skills  -->
                <button class="btn rounded-8 shadow-0 btn-sm text-muted add_elm" data-mdb-toggle="modal"
                        data-mdb-target="#addSkillModal" style="border: 2px dashed #ABABAB;"><i
                            class="fas fa-plus text-muted"></i> Add Skills
                </button>

            </div>
        </div>
    </div>
</div>

<!-- delete skills list -->
<div class="modal top fade" id="DeleteSkillModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Skill Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn" style="background-color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">
                    yes
                </button>
                <button type="button" class="btn shadow-0">No</button>
            </div>
        </div>
    </div>
</div>

<!-- update skills list -->
<div class="modal top fade" id="UpdateSkillModal" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="UpdateModalLabel">Update Skills</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

                <!--  Skill-title -->
                <p class="error-message" id="skillSection">Please Enter Skill Name</p>


                <input type="text" id="skillName" class="form-control rounded-7 mb-2 p-2" placeholder="Skill Name"
                       style="background-color: <?php echo $color; ?>;"/>


                <!-- 2 DropDown -->

                <select class="form-select rounded-7 p-2 mb-2" id="Update_skill_type"
                        style="border: 1px solid rgba(245, 245, 245, 1); background-color: #ABABAB" required="">
                    <option selected="" disabled="" value="Skill Type">Skill Type</option>
                    <option value="Technical">Technical</option>
                    <option value="Functional">Functional</option>
                </select>

                <!-- range -->
                <div>
                    <label class="form-label m-2 text-secondary" for="customRange1">Skill Proficiency :</label>
                    <div class="range">
                        <input type="range" class="form-range" id="customRange1"/>
                    </div>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-end border-top-0">
                <button type="button" class="btn " style="background-color: <?php echo $color; ?>;">CLOSE</button>
                <button type="button" class="btn" onclick="UpdateSkill();"
                        style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">UPDATE
                </button>
            </div>
        </div>
    </div>
</div>

<!-- add Skills -->
<div class="modal top fade" id="addSkillModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="addSkillModal">Add Skills</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">

                <!--  Skill-title -->
                <p class="error-message" id="skillSection2">Please Enter Skill Name</p>


                <input type="text" id="skillName2" class="form-control rounded-7  mb-2 p-2" placeholder="Skill Name"
                       style="background-color: <?php echo $color; ?>;"/>


                <!-- 2 DropDown -->
                <select class="form-select rounded-7 mb-2 p-2" id="Update_skill_type"
                        style="border: 1px solid rgba(245, 245, 245, 1); background-color: #ABABAB" required="">
                    <option selected="" disabled="" value="Skill Type">Skill Type</option>
                    <option value="Technical">Technical</option>
                    <option value="Functional">Functional</option>
                </select>
                <!-- range -->
                <div>
                    <label class="form-label m-2 text-secondary" for="customRange1">Skill Proficiency :</label>
                    <div class="range">
                        <input type="range" class="form-range" id="customRange1"/>
                    </div>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-end border-top-0">
                <button type="button" class="btn " style="background-color: <?php echo $color; ?>;">CLOSE</button>
                <button type="button" class="btn" onclick="AddSkill();"
                        style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">UPDATE
                </button>
            </div>
        </div>
    </div>
</div>


<!-- certificates-modal -->
<div class="modal top fade" id="certificates-modal" tabindex="-1" aria-labelledby="certificates-modalLabel"
     aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content "
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border:1px solid #ABABAB;">

            <div class="modal-header border-bottom-0 d-flex justify-content-end" style="border: 1px solid #ABABAB;">

                <button type="button" class="btn shadow-0 " style="font-size:3rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>


            <div class="modal-header border-bottom-0 d-flex justify-content-start">
                <img src="/img/Group 3.png" style="width: 10vw;" alt="">
                <p class="modal-title  ms-3  " style="font-size: 4vw; color: <?php echo $color; ?>;"
                   id="certificates-modalLabel">
                    Certificates</p>
            </div>

            <div class="modal-body p-5">
                <div id="myCarousel" class="carousel slide text-center" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row flex-row ">
                                    <!-- Place your cards here -->
                                    <!-- First-Card -->
                                    <div class="col-lg-4 col-12 p-3 g-3 ">
                                        <div class="card rounded-0 shadow-0"
                                             style="flex: 0 0 auto; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border:1px solid #ABABAB;">
                                            <div class="card-header rounded-0 d-flex justify-content-between p-3 "
                                                 style="border:1px solid #ABABAB;">
                                                <i class="fi fi-ss-settings " style="color: <?php echo $color; ?>;"></i>
                                                <i class="fi fi-ss-file" data-mdb-toggle="modal"
                                                   data-mdb-target="#ViewCertificate"
                                                   style="color: <?php echo $color; ?>;"></i>
                                            </div>
                                            <div class="card-body " style="border:1px solid #ABABAB;">
                                                <p class="card-text " style="color: <?php echo $color; ?>;">
                                                    Certificate Of Achievements<br> UI / UX Website Design 1
                                                </p>
                                            </div>
                                            <div class="card-footer rounded-0 text-muted d-flex justify-content-between "
                                                 style="border:1px solid #ABABAB;">23rd Dec 2022 - 28th Dec 2022


                                                <i class="fi fi-ss-menu-dots-vertical  dropdown me-1"
                                                   id="dropdownMenuButton"
                                                   data-mdb-toggle="dropdown" aria-expanded="false"
                                                   style="color: <?php echo $color; ?>;">

                                                </i>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                           data-mdb-target="#editCertificate"> <i
                                                                    class="fas fa-pen me-2"></i> Edit </a></li>
                                                    <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                           data-mdb-target="#deleteCertificate"> <i
                                                                    class="fas fa-trash-can me-2"></i>Delete</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 p-3 g-4">
                                        <div class="card rounded-0 shadow-0 w-full h-100"
                                             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

                                            <div class="card-body  d-flex justify-content-center align-items-center"
                                                 style="border:2px dashed #ABABAB;">
                                                <div data-mdb-toggle="modal" data-mdb-target="#addCertificate">
                                                    <i class="fi fi-ss-add fa-2x"
                                                       style="color: <?php echo $color; ?>;"></i>


                                                    <p class="card-text " style="color: <?php echo $color; ?>;">
                                                        Add Certificates
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- For creating new Project -->


                        <!-- Additional items go here -->
                    </div>
                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" type="button" style="margin-left: -8%;"
                            data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" style="margin-right: -8%;"
                            data-bs-target="#myCarousel"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- edit certificates -->
<div class="modal top fade" id="editCertificate" tabindex="-1" aria-labelledby="editCertificateLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="editCertificateLabel">Edit Certificates</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon3">Please Select any icon</p>
                <p class="error-message" id="messageCertificate">Enter Certificate Name</p>
                <p class="error-message" id="messageInstitution">Enter Institution Name</p>
                <p class="error-message" id="MessageDate3">Enter Starting date</p>
                <p class="error-message" id="MessageFile">Please Upload Certificate</p>

                <div class="row d-flex">
                    <div class="col-12 container m-2">
                        <button class="btn  btn-floating" id="certificate" name="icon" value="certificate"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-certificate "></i></button>
                        <button class="btn btn-floating" id="award" name="icon" value="award"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-award "></i></button>
                        <button class="btn btn-floating" id="medal" name="icon" value="medal"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-medal"></i></button>
                        <button class="btn btn-floating" id="trophy" name="icon" value="trophy"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-trophy"></i></button>
                    </div>


                </div>
                <!--  project-title -->


                <input id="certi_name" name="certi_name" type="text" placeholder="Certification Name:"
                       aria-placeholder="Certification Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB"
                       data-listener-added_74bc56c3="true">
                <input id="certi_inst" name="certi_inst" type="text" placeholder="Institution Name:"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_start"
                                   name="certi_start" data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_end"
                                   name="certi_end" data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB">
                        </div>
                    </div>
                </div>
                <input type="file" class="form-control rounded-9 form-control-lg" name="certi_image" id="certi_image"
                       accept=".jpg, .jpeg, .png, .pdf"
                       style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">


                <div class="modal-footer d-flex justify-content-end border-top-0">
                    <button type="button" class="btn " style="background-color: <?php echo $color; ?>;">CLOSE</button>
                    <button type="button" class="btn " onclick="editCertificate();"
                            style="background-color: <?php echo $bgColor; ?>;">SAVE
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>

<!--  View Certificate-->
<div class="modal top fade" id="ViewCertificate" tabindex="-1" aria-labelledby="ViewCertificateLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="ViewCertificateLabel">Certificate</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <div class="card">

                </div>
            </div>
            <div class="modal-footer border-top-0">

                <button type="button" class="btn align-self-end" style="background-color: <?php echo $color; ?>;">
                    CLOSE
                </button>
            </div>
        </div>
    </div>
</div>

<!--  add Certificate-->
<div class="modal top fade" id="addCertificate" tabindex="-1" aria-labelledby="addCertificateLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="addCertificateLabel">Add Certificates</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon4">Please Select any icon</p>
                <p class="error-message" id="messageCertificate2">Enter Certificate Name</p>
                <p class="error-message" id="messageInstitution2">Enter Institution Name</p>
                <p class="error-message" id="MessageDate4">Enter Starting date</p>
                <p class="error-message" id="MessageFile2">Please Upload Certificate</p>


                <div class="row d-flex">
                    <div class="col-12 container m-2">
                        <button class="btn  btn-floating" id="certificate" name="icon" value="certificate"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-certificate "></i></button>
                        <button class="btn btn-floating" id="award" name="icon" value="award"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-award "></i></button>
                        <button class="btn btn-floating" id="medal" name="icon" value="medal"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-medal"></i></button>
                        <button class="btn btn-floating" id="trophy" name="icon" value="trophy"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-trophy"></i></button>
                    </div>


                </div>
                <!--  project-title -->

                <input id="certi_name2" name="certi_name" type="text" placeholder="Certification Name:"
                       aria-placeholder="Certification Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB"
                       data-listener-added_74bc56c3="true">
                <input id="certi_inst2" name="certi_inst" type="text" placeholder="Institution Name:"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_start"
                                   name="certi_start" data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_end"
                                   name="certi_end" data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                        </div>
                    </div>
                </div>
                <input type="file" class="form-control rounded-9 form-control-lg" name="certi_image2" id="certi_image2"
                       accept=".jpg, .jpeg, .png, .pdf"
                       style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">


                <div class="modal-footer d-flex justify-content-end border-top-0">
                    <button type="button" class="btn " style="background-color: <?php echo $color; ?>;">CLOSE</button>
                    <button type="button" class="btn " onclick="addCertificate();"
                            style="background-color: <?php echo $bgColor; ?>;">SAVE
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>

<!--  Delete Certificate-->
<div class="modal top fade" id="deleteCertificate" tabindex="-1" aria-labelledby="deleteCertificateLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="deleteCertificateLabel">Delete</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Certificates Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn" style="background-color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">
                    yes
                </button>
                <button type="button" class="btn ">No</button>
            </div>
        </div>
    </div>
</div>


<!-- Education modal -->
<div class="modal top fade" id="Educationmodal" tabindex="-1" aria-labelledby="EducationmodalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content "
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">

            <div class="modal-header border-bottom-0 d-flex justify-content-end" style="border: 1px solid #ABABAB;">

                <button type="button" class="btn shadow-0  " style="font-size:3rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>

            <div class="modal-header border-bottom-0 d-flex justify-content-start">
                <img src="/img/Group 34.png" style="width: 10vw; opacity: 0.5;" alt="">
                <p class="modal-title  ms-3  " style="font-size: 4vw; color: <?php echo $color; ?>;"
                   id="EducationmodalLabel">
                    Education</p>
            </div>

            <div class="modal-body">
                <div id="myCarousel" class="carousel slide text-center" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row flex-row ">
                                    <!-- Place your cards here -->
                                    <!-- First-Card -->

                                    <div class="col-lg-4 col-12 p-3 g-3 ">
                                        <div class="card rounded-0 shadow-0"
                                             style="flex: 0 0 auto; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border:1px solid #ABABAB;">
                                            <div class="card-header rounded-0 d-flex justify-content-between p-3 "
                                                 style="border:1px solid #ABABAB;">
                                                <i class="fi fi-ss-devices " style="color: <?php echo $color; ?>;"></i>

                                            </div>
                                            <div class="card-body " style="border:1px solid #ABABAB;">
                                                <p class="card-text " style="color: <?php echo $color; ?>;">
                                                    This is a long paragraph that will be truncated after two lines if
                                                </p>
                                            </div>
                                            <div class="card-footer rounded-0 text-muted d-flex justify-content-between "
                                                 style="border:1px solid #ABABAB;"> 03rd Jul 2017 -
                                                02nd jul 2021


                                                <i class="fi fi-ss-menu-dots-vertical  dropdown me-1"
                                                   id="dropdownMenuButton"
                                                   data-mdb-toggle="dropdown" aria-expanded="false"
                                                   style="color: <?php echo $color; ?>;">

                                                </i>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                           data-mdb-target="#editEducation" href="#"> <i
                                                                    class="fi fi-ss-pen-clip"></i> Edit </a></li>
                                                    <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                           data-mdb-target="#deleteEducation" href="#"> <i
                                                                    class="fi fi-ss-trash"></i>Delete</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 p-3 g-4">
                                        <div class="card rounded-0 shadow-0 w-full h-100"
                                             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

                                            <div class="card-body  d-flex justify-content-center align-items-center"
                                                 style="border:2px dashed #ABABAB;">
                                                <div data-mdb-toggle="modal" data-mdb-target="#addEducation">
                                                    <i class="fi fi-ss-add fa-2x"
                                                       style="color: <?php echo $color; ?>;"></i>
                                                    <p class="card-text " style="color: <?php echo $color; ?>;">
                                                        Add Education
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Additional items go here -->
                    </div>
                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" style="margin-left: -8%;" type="button"
                            data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" style="margin-right: -8%;" type="button"
                            data-bs-target="#myCarousel"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  add Education-->
<div class="modal top fade" id="addEducation" tabindex="-1" aria-labelledby="addEducationLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="addEducationLabel">Add Education</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon5">Please Select any icon</p>
                <p class="error-message" id="messageInstitution4">Enter Institution Name</p>
                <p class="error-message" id="messageDegree">Enter your Degree Name</p>
                <p class="error-message" id="MessageStudyField">Enter Your Study Field</p>
                <p class="error-message" id="MessagePercentage">Enter Your Percentage or CGPA</p>


                <div class="row d-flex">
                    <div class="col-12 container m-2">
                        <button class="btn  btn-floating" id="phd" name="icon" value="phd" onclick="radioCheck(this);"
                                style="background-color: <?php echo $color; ?>;"><i class="fas fa-school "></i></button>
                        <button class="btn btn-floating" id="pg" name="icon" value="post-Graduation"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-building-columns"></i></button>
                        <button class="btn btn-floating" id="Graduation" name="icon" value="Graduation"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-graduation-cap"></i></button>
                        <button class="btn btn-floating" id="clg" name="icon" value="school/college"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-chalkboard-user"></i></button>
                    </div>


                </div>
                <!--  project-title -->
                <input id="Edu_inst" name="Edu_inst" type="text" placeholder="Institution- Ex: Boston University)"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB">
                <input id="Edu_deg" name="Edu_deg" type="text" placeholder="Degree: Ex: Bachelor's"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB">
                <input id="Edu_FOS" name="Edu_FOS" type="text" placeholder="Field of Study: Ex: Architecture"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB"
                       data-listener-added_74bc56c3="true">
                <input id="Edu_CGPA" name="Edu_CGPA" type="text" placeholder="CGPA/Percentage:"
                       aria-placeholder="CGPA/Percentage:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_start" name="Edu_start" type="text"
                                   class="form-control rounded-9 w-100 p-2 mb-3" data-mdb-toggle="datepicker"
                                   placeholder="Start Date:" aria-placeholder="Starting Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_end" name="Edu_end" type="text" class="form-control rounded-9 w-100 p-2 mb-3"
                                   data-mdb-toggle="datepicker" placeholder="End Date:" aria-placeholder="Ending Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-top-0">
                    <button type="button" class="btn shadow-0" data-mdb-dismiss="modal">Close</button>
                    <button onclick="addEducation()" type="button"
                            class="btn btn-dark rounded-9 shadow-0 text-capitalize fw-light ls-widest">Save changes
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>

<!--  edit Education-->
<div class="modal top fade" id="editEducation" tabindex="-1" aria-labelledby="editEducationLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="editEducationLabel">Edit Education</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon6">Please Select any icon</p>
                <p class="error-message" id="messageInstitution5">Enter Institution Name</p>
                <p class="error-message" id="messageDegree2">Enter your Degree Name</p>
                <p class="error-message" id="MessageStudyField2">Enter Your Study Field</p>
                <p class="error-message" id="MessagePercentage2">Enter Your Percentage or CGPA</p>


                <div class="row d-flex">
                    <div class="col-12 container m-2">
                        <button class="btn  btn-floating" id="phd" name="icon" value="phd" onclick="radioCheck(this);"
                                style="background-color: <?php echo $color; ?>;"><i class="fas fa-school "></i></button>
                        <button class="btn btn-floating" id="pg" name="icon" value="post-Graduation"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-building-columns"></i></button>
                        <button class="btn btn-floating" id="Graduation" name="icon" value="Graduation"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-graduation-cap"></i></button>
                        <button class="btn btn-floating" id="clg" name="icon" value="school/college"
                                onclick="radioCheck(this);" style="background-color: <?php echo $color; ?>;"><i
                                    class="fas fa-chalkboard-user"></i></button>
                    </div>


                </div>
                <!--  project-title -->
                <input id="Edu_inst2" name="Edu_inst" type="text" placeholder="Institution- Ex: Boston University)"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB">
                <input id="Edu_deg2" name="Edu_deg" type="text" placeholder="Degree: Ex: Bachelor's"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB">
                <input id="Edu_FOS2" name="Edu_FOS" type="text" placeholder="Field of Study: Ex: Architecture"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB"
                       data-listener-added_74bc56c3="true">
                <input id="Edu_CGPA2" name="Edu_CGPA" type="text" placeholder="CGPA/Percentage:"
                       aria-placeholder="CGPA/Percentage:" class="rounded-9 w-100 p-2 mb-3"
                       style="border: 3px solid rgba(245, 245, 245, 1); background-color: #ABABAB">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_start" name="Edu_start" type="text"
                                   class="form-control rounded-9 w-100 p-2 mb-3" data-mdb-toggle="datepicker"
                                   placeholder="Start Date:" aria-placeholder="Starting Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_end" name="Edu_end" type="text" class="form-control rounded-9 w-100 p-2 mb-3"
                                   data-mdb-toggle="datepicker" placeholder="End Date:" aria-placeholder="Ending Date:"
                                   style="border: 3px solid rgba(245, 245, 245, 1);background-color: #ABABAB"">
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-top-0">
                    <button type="button" class="btn shadow-0" data-mdb-dismiss="modal">Close</button>
                    <button onclick="editEducation();" type="button"
                            class="btn btn-dark rounded-9 shadow-0 text-capitalize fw-light ls-widest">Save changes
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>

<!--  delete Education-->
<div class="modal top fade" id="deleteEducation" tabindex="-1" aria-labelledby="deleteEducationLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header ">
                <h5 class="modal-title" id="deleteEducationLabel">Delete</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Education Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn" style="background-color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">
                    yes
                </button>
                <button type="button" class="btn  shadow-0">No</button>
            </div>
        </div>
    </div>
</div>

<!-- About Modal -->

<div class="modal top fade" id="Aboutmodal" tabindex="-1" aria-labelledby="AboutmodalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content  "
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid #ABABAB;">
            <div class="modal-header border-bottom-0">
                <img src="/img/Group 5.png" style="width: 10vw;" alt="">
                <h2 class="modal-title  ms-2" style="font-size: 4vw; margin-left: 10%; color: <?php echo $color; ?>;"
                    id="AboutmodalLabel">
                    About Me</h2>
                <button type="button" class="btn shadow-0" style="font-size:3rem;" data-mdb-dismiss="modal"
                        aria-label="Close">X
                </button>
            </div>
            <div class="modal-body">
                <p style="font-size: 1.5rem; color: <?php echo $color; ?>;">
                    My creative ability and flair for design make me passionate about crafting beautiful visual content
                    that
                    captures the essence of businesses. I strive to uphold the highest standards in my work while
                    exploring
                    new
                    ways to deliver results with innovative visuals.My experience and expertise in user interface (UI)
                    design
                    helps me create fluid designs that capture the essence of the brand effectively and help my clients
                    get
                    maximum ROI from their projects.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->

<div class="modal top fade" id="Protfoliomodal" tabindex="-1" aria-labelledby="ProtfoliomodalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-body p-5"
                 style="border: 1px solid #ABABAB; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <!-- images -->
                <div>
                    <img src="https://i1.sndcdn.com/artworks-lNVFu4JIlqP7knsj-jPeF2w-t500x500.jpg"
                         style="height: 12vh ;" alt=""
                         class="mb-3 rounded-circle ">
                </div>
                <!-- name-->
                <h3 style="color: <?php echo $color; ?>;"> Aakash Jaiswal</h3>
                <h4 style="color: <?php echo $color; ?>;">Bcs Student & Visual Designer</h4>
                <!--  description -->
                <p style="color: <?php echo $color; ?>;">
                    Hello, I'm Sudhanshu Satapathy. I'm a Visual Designer passionate about creating engaging visuals
                    with
                    innovative ideas through different mediums. My experience and expertise in user interface (UI)
                    design
                    helps
                    me create fluid designs that capture the essence of the brand effectively and help my clients get
                    maximum
                    ROI from their projects.
                </p>
            </div>
            <div style="height: 3vh; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;"></div>
            <div class="modal-footer "
                 style=" border: 1px solid #ABABAB; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <div class=" mx-auto ">
                    <button class="btn " style="color: <?php echo $color; ?>;">View Portfolio</button>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Custom scripts -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript"></script>
<script src="/js/index.js"></script>


</body>

</html>