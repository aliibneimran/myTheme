<div class="sidebar">

    <h3 class="sidebar-title">Search</h3>
    <?php dynamic_sidebar('sidebar-1') ?>
    <!-- End sidebar search formn-->

    <h3 class="sidebar-title">Categories</h3>
    <?php dynamic_sidebar('sidebar-2') ?>

    <h3 class="sidebar-title">Recent Posts</h3>
    <?php ?>
    <div class="sidebar-item recent-posts">
        <?php while (have_posts()) : the_post(); ?>
            <div class="post-item clearfix">
                <?php the_post_thumbnail(array(100, 80)) ?>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                <time datetime="2020-01-01"><?php echo get_the_date() ?></time>
            </div>
        <?php endwhile ?>
    </div>
    <!-- End sidebar recent posts-->

    <h3 class="sidebar-title">Tags</h3>
    <?php dynamic_sidebar('sidebar-4') ?>

    <!-- End sidebar tags-->

</div>