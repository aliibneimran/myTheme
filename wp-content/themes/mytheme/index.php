<?php get_header()?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php wp_title()?></h2>
          <ol>
            <li><a href="<?php echo site_url()?>">Home</a></li>
            <li><?php wp_title()?></li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <!-- http://localhost/wpTheme/wp-content/themes/wpimran/ -->

          <div class="col-lg-8 entries">

          <?php while(have_posts()): the_post();?>
            <article class="entry">

              <div class="entry-img">
                <?php the_post_thumbnail()?>
              </div>

              <h2 class="entry-title">
                <a href="<?php the_permalink()?>"><?php the_title()?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php the_permalink()?>"><?php the_author()?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php the_permalink()?>"><time datetime="2020-01-01"><?php echo get_the_date()?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="<?php the_permalink()?>">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <?php the_excerpt()?>
                <div class="read-more">
                  <a href="<?php the_permalink()?>">Read More</a>
                </div>
              </div>

            </article>
            <?php endwhile?>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            <?php get_sidebar()?>
          </div>
          <!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php get_footer()?>