<?php

/**
 * This file is loaded if no other template files are found.
 * 
 * Know your WordPress template hierarchy:
 * https://wphierarchy.com
 * 
 * Template Name: Front-Page.php
 * 
 */
?>

<?php get_header(); ?>


<div class="front-page-hero">
    <div class="welcome-hero">
        <?php $image = get_field('welcome_image');

        if (!empty($image)) : ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-no-lazy="1" />

        <?php endif; ?>

        <div class="welcome-hero-text">
            <h1><?php the_field('welcome_text'); ?></h1>
            <h4><?php the_field('welcome_sub-title'); ?></h4>
        </div>

    </div>
</div>

<div class="job">
    <!-- Job Search -->
    <?php get_template_part('partials/job', 'search'); ?>
</div>



<div id="full-page">

    <div id="inner-content">


        <div class="blue-circle"></div>
        <main class="main" role="main">

            <!-- Page Modules -->
            <?php get_template_part('partials/page', 'modules'); ?>
        </main>

    </div>

</div>


<?php get_footer(); ?>