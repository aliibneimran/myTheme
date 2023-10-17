<footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <?php dynamic_sidebar('footer-1-widget')?>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <?php dynamic_sidebar('footer-2-widget')?>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <?php dynamic_sidebar('footer-3-widget')?>
                        
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <?php dynamic_sidebar('footer-4-widget')?>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php wp_footer() ?>
</body>

</html>