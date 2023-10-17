<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            <?php
            $query = new WP_Query(
                array(
                    "post_type" => "Sliders", 'post_per_page' => 5, 'orderby' => 'menu_order', 'order' => 'ASC'
                )
            );
            while ($query->have_posts($post)) :
                $query->the_post();
                $btn_text = get_post_meta($post->ID, 'btn_text', true);
                $btn_link = get_post_meta($post->ID, 'btn_link', true);

            ?>
                <div class="carousel-item active" style="background-image: url(<?php the_post_thumbnail_url('large') ?>);">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><?php the_title() ?></h2>
                            <p class="animate__animated animate__fadeInUp"><?php the_content() ?></p>
                            <a href="<?php echo $btn_link ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo $btn_text ?></a>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>