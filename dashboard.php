<?php
    include "./config.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <link rel="stylesheet" href="./stylesheet/test.css">
        <!-- <link rel="stylesheet" href="./stylesheet/register_yuya.css"> -->
        <script src="./js/jquery.js"></script>

        <title>Dashboard</title>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php page_handling("register_admin")?>">Register for Admin page</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php page_handling("edit_admin")?>">Edit user info for Admin page</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php page_handling("edit_course_admin")?>">Edit course info for Admin page</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php page_handling("maxmin")?>">Max and Min for Admin page</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php page_handling("teachers")?>">Mark for Teachers page</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php page_handling("students")?>">Check grade for Student page</a>

                    

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div>
                    <h1>Contents</h1>
                    <div>
                        <?php
                            if(isset($_GET["add"])){
                                include "pages/".$_GET["add"].".php";

                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
