<?php
/*
 Template Name: About
 */

get_header(); ?>
<?php get_template_part('content/breadcrumbs') ?>

<?php //while (have_posts()) : the_post(); ?>

  <!-- ======= About Section ======= -->
  <?php get_template_part('content/about') ?>

  <!-- ======= Team Section ======= -->
  <?php get_template_part('content/team') ?>

  <!-- ======= Skills Section ======= -->
  <?php get_template_part('content/skills') ?>

<?php //endwhile ?>

<?php get_footer() ?>