<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php
            $query = new WP_Query(
                array(
                    "post_type" => "Portfolio", 'post_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC'
                )
            );
            while ($query->have_posts()) :
                $query->the_post();
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <?php the_post_thumbnail('medium') ?>
                        <div class="portfolio-info">
                            <h4><?php the_title()?></h4>
                            <p><?php the_content()?></p>
                            <div class="portfolio-links">
                                <a href="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="<?php the_permalink()?>" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>

        </div>

    </div>
</section>