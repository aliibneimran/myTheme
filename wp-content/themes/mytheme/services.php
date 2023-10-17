<?php 
/*
Template Name: Services
*/
get_header() ?>
<?php while(have_posts()): the_post();?>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><?php the_title()?></h2>
            <ol>
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><?php the_title()?></li>
            </ol>
        </div>
    </div>
</section>
<?php get_template_part('content/service')?>
<?php endwhile?>

<?php get_footer() ?>