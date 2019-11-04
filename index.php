<?php

/**
 * This file is loaded if no other template files are found.
 * 
 * Know your WordPress template hierarchy:
 * https://wphierarchy.com
 * 
 */
?>

<?php get_header(); ?>



<div id="content">

    <div id="inner-content" class='container'>

        <div class="title-page">
            <h1><?php wp_title(''); ?></h1>
        </div>

        <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="https://schema.org/Blog">

            <div class="blue-circle"></div>


            <div class="l-section">


                <?php

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'posts_per_page' => 9,
                    'paged' => $paged, 'post_type' => 'post'
                );
                $postslist = new WP_Query($args);


                if ($postslist->have_posts()) :
                    while ($postslist->have_posts()) : $postslist->the_post(); ?>


                <div class="l-item">
                    <div class="l-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>

                    <div class="text-card">
                        <h3><?php the_title(); ?></h3>
                        <!-- only output first 55 words -->
                        <p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>
                    </div>

                    <a href="<?php the_permalink(); ?>">
                        <button>Read More</button>
                    </a>

                </div>



                <?php endwhile;
                endif; ?>
            </div>
            <div class="pagination">
                <?php next_posts_link('See our older posts', $postslist->max_num_pages); ?>
                <?php previous_posts_link('See our Newest Posts'); ?>
                <?php wp_reset_postdata(); ?>
            </div>

        </main>

        <!-- Page Modules -->
        <?php get_template_part('partials/page', 'modules'); ?>

    </div>

</div>


<?php get_footer(); ?>