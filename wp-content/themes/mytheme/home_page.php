<?php 
/*
Template Name: Home
*/
get_header()?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <?php get_template_part('content/carosel')?>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <?php get_template_part('content/about')?>
        <!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <?php get_template_part('content/clients')?>
        <!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <?php get_template_part('content/service')?>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <?php get_template_part('content/portfolio')?>
        <!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
   <?php get_footer()?>