<section id="services" class="services">
    <div class="container">
        <div class="row">
            <?php
            $query = new WP_Query(
                array(
                    "post_type" => "Service", 'post_per_page' => 6, 'orderby' => 'menu_order', 'order' => 'ASC'
                )
            );
            while ($query->have_posts()) :
                $query->the_post();
                $btn_text = get_post_meta($post->ID, 'btn_text', true);
                $btn_link = get_post_meta($post->ID, 'btn_link', true);

            ?>
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="<?php $btn_link ?>"><?php the_title() ?></a></h4>
                        <p><?php the_content() ?></p>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</section>