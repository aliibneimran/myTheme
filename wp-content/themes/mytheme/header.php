<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1>

            <nav id="navbar" class="navbar">

                <?php
                $args = array(
                    'theme_location' => 'menu-1',
                    'menu-class' => 'navbar',
                );
                wp_nav_menu($args)
                ?>
                <!-- <li><a href="index.html" class="getstarted">Get Started</a></li> -->
                <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
            </nav><!-- .navbar -->

        </div>
    </header>