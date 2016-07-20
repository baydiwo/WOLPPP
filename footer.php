<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wolppp
 */

?>
</div>
    <!-- /container -->
    <footer>
        <div class="content">
            <div class="footer-menu">
                <nav class="codrops-demos">
                    <?php    /**
                        * Displays a navigation menu
                        * @param array $args Arguments
                        */
                        $args = array(
                            'theme_location' => '',
                            'menu' => '',
                            'container' => 'nav',
                            'container_class' => 'menu-{menu-slug}-container',
                            'container_id' => '',
                            'menu_class' => 'menu',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth' => 0,
                            'walker' => ''
                        );

                        wp_nav_menu( $args ); ?>
                </nav>
                <img src="<?php echo get_template_directory_uri() ?>/img/footer.png" alt="">
            </div>
            <div class="copy">
                <p>Wolppp aims to be a finest digital wallpaper showcase website that heavily curated the best art and design in the world. <br><br>
                All wallpaper artworks showcased in this website are repectively owned by each artist who made it. <br><br>
                2016 © wolppp.com  |  Wolppp is made with <love> in Jakarta, Indonesia.</p>
            </div>
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-footer.png" alt="">
            </div>
        </div>
        <!-- content     -->
    </footer>

    <?php echo dslc_hf_get_footer(); ?>

    <?php wp_footer(); ?>

    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
    <!-- <script src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr-custom.js"></script> -->
    <!--<script src="<?php echo get_template_directory_uri() ?>/js/vendor/cbpAnimatedHeader.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/masonry.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/classie.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/jquery.popupoverlay.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/main.js"></script> -->
    <!-- <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js"></script> -->
</body>

</html>
