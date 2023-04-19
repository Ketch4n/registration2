<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
   echo view("include/meta.php");
   echo view("include/css.php");
   ?>
</head>

<body>
    <?php 
    echo view("include/preloader.php");
    ?>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php 
            echo view("include/navbar.php") 
            ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php 
                    echo view("include/sidebar.php") 
                    ?>
                    <div class="pcoded-content">
                        <?php 
                        echo view("include/header.php") 
                        ?>
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <?php
                                            echo view('content/dashboard/dashboard.php')
                                            ?>
                                            <?php
                                            // echo view("content/dashboard/dashboard1")
                                            ?>
                                            <?php
                                            // echo view("content/dashboard/dashboard2")
                                            ?>
                                            <?php
                                            // echo view("content/dashboard/dashboard3")
                                            ?>  
                                        </div>
                                    </div>
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
   <?php 
   echo view("include/script.php");
   ?>  
</body>
</html>
