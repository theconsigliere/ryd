<?php get_header(); ?>

<div id="content">

    <div id="inner-content">

        <div class="blog-single">
            <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage"
                itemtype="https://schema.org/Blog">

                <div class="blog-image-single">
                    <?php the_post_thumbnail('full'); ?>
                </div>

                <?php // Edit the loop in /templates/single-loop. Or roll your own. 
                ?>
                <?php get_template_part('templates/single', 'loop'); ?>

            </main>

        </div>
        <!-- Page Modules -->
        <?php get_template_part('partials/content', 'blogs'); ?>
    </div>

</div>


<?php get_footer(); ?>