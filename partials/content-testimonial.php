<section class="looking-section">
    <div class="container">

        <div class="looking-text-section">
            <h2><?php the_sub_field('t_title'); ?></h2>
        </div>

        <?php if (have_rows('t_item')) : ?>

        <div class="l-section">

            <div class="carousel" data-flickity='{ "autoPlay": true, "wrapAround": true  }'>

                <?php while (have_rows('t_item')) : the_row(); ?>
                <div class="carousel-cell">
                    <img src="<?php echo get_theme_file_uri(); ?>/library/images/g_reviews.png" itemprop="logo"
                        alt="site logo" />
                    <h4><?php the_sub_field('t_quote'); ?></h4>
                    <h6><?php the_sub_field('t_initial'); ?></h6>


                </div>
                <?php endwhile; ?>

            </div>


        </div>
        <?php endif; ?>

    </div>


</section>