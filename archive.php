<?php

/**
 * This file is loaded if no other template files are found.
 * 
 * Know your WordPress template hierarchy:
 * https://wphierarchy.com
 * 
 * Template Name: Archive
 */
?>

<?php get_header(); ?>

<div class="page-hero-header">

    <div class="header-hero-image">
        <?php $image = get_field('header_image');
        if (!empty($image)) : ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>

    </div>

    <div class="header-hero-text">
        <h1><?php the_field('header_title'); ?></h1>
        <div class="underline"></div>
        <h3><?php the_field('header_sub_title'); ?></h3>
    </div>


</div>



<div id="content">

    <div id="inner-content">



        <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage"
            itemtype="https://schema.org/Blog">

            <div class="blue-circle"></div>




            <?php
            // organise our options into a data object
            $args = array(
                'orderby' => 'date',
                'posts_per_page' => 1

            );
            // a variable with our query and options
            $query = new WP_Query($args);
            // do a loop with our new query code 
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <!-- code as we’re used to already! -->



            <section class="padding-section">
                <div class="container">

                    <div class="newsletter-group reverse">
                        <div class="newsletter-image">
                            <?php the_post_thumbnail('full'); ?>
                        </div>

                        <div class="newsletter-right-section">

                            <div class="newsletter-text">
                                <div class="text-card left">
                                    <h3><?php the_title(); ?></h3>
                                    <!-- only output first 55 words -->
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>

                                    <a href="<?php the_permalink(); ?>">
                                        <button>Read More</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <?php endwhile;
            endif; ?>




            <div class="l-section container">


                <?php

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'posts_per_page' => 9,
                    'paged' => $paged, 'post_type' => 'post',
                    'post__not_in' => array($post->ID)
                );
                $postslist = new WP_Query($args);


                if ($postslist->have_posts()) :
                    while ($postslist->have_posts()) : $postslist->the_post(); ?>


                <div class="l-item">
                    <div class="l-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>

                    <div class="text-card">
                        <h5><?php the_title(); ?></h5>
                        <!-- only output first 55 words -->

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



            <!-- Page Modules -->
            <?php get_template_part('partials/page', 'modules'); ?>

        </main>
    </div>

</div>


<?php get_footer(); ?>