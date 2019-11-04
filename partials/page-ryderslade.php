<?php

/**
 * This file is loaded if no other template files are found.
 * 
 * Know your WordPress template hierarchy:
 * https://wphierarchy.com
 * 
 * Template Name: Ryderslade Customizable Template 
 * 
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