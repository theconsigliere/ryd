<footer id="footer" class="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

    <div class="orange-circle"></div>

    <div id="inner-footer" class="container">

        <div class="footer-section">

            <div id="logo" itemprop="logo">
                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                    <img src="<?php echo get_theme_file_uri(); ?>/library/images/ryderslade.svg" itemprop="logo"
                        alt="site logo" />
                </a>
            </div>

            <div class="footer-columns">
                <?php wp_nav_menu(
                    array(

                        'container' => false,                          // remove nav container
                        'menu' => __('Footer Column Left', 'platetheme'), // nav name
                        'menu_class' => 'footer-column',       // adding custom nav class
                        'theme_location' => 'footer-column',                // where it's located in the theme

                    )
                ); ?>

                <?php wp_nav_menu(
                    array(

                        'container' => false,                          // remove nav container
                        'menu' => __('Footer Column Right', 'platetheme'), // nav name
                        'menu_class' => 'footer-column-2',       // adding custom nav class
                        'theme_location' => 'footer-column2',                // where it's located in the theme

                    )
                ); ?>


            </div>


        </div>

        <div class="footer-bottom">

            <div class='footer-logos'>
                <img src="<?php echo get_theme_file_uri(); ?>/library/images/footer-logos.jpg" itemprop="logo"
                    alt="site logo" />
            </div>

            <div class="header-nav-info">
                <div class="header-info">

                    <div class="header-widget-area">
                        <?php dynamic_sidebar('headerwidget'); ?>

                    </div>

                    <?php get_template_part('partials/social', 'icons'); ?>

                </div>

            </div>

        </div>
        <div class="disclaimer">
            <p class="source-org copyright">Privacy Policy Registered in England No. 11048503 |
                &copy;
                <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved | Website
                created by <a target='new' href='https://dirty-martini.com'>Dirty Martini
                    Marketing</a>
            </p>
        </div>


    </div>




</footer>

</div>
</div>

<?php // all js scripts are loaded in library/functions.php 
?>
<!-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>

</html> <!-- This is the end. My only friend. -->