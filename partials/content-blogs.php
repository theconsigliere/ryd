<section class="blog-section">

    <div class="container">

        <div class="blog-title">
            <h2><?php the_sub_field('b_title') ?></h2>
        </div>

        <div class="l-section">
            <?php
            // the query
            $the_query = new WP_Query(array(
                'category_name' => 'news',
                'posts_per_page' => 3,
            ));
            ?>

            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="l-item">
                <div class="l-image">
                    <?php the_post_thumbnail('full'); ?>
                </div>

                <div class="text-card">
                    <h5><?php the_title(); ?></h5>
                    <!-- only output first 55 words -->
                    <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                </div>

                <a href="<?php the_permalink(); ?>">
                    <button>Read More</button>
                </a>

            </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <p><?php __('No News'); ?></p>
            <?php endif; ?>



        </div>


    </div>




</section>