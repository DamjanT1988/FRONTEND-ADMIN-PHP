<?php
/*
Template Name: New page with widget
*/

?>

<?php get_header(); ?>



<div class="wrapper5">
    <section>
<!--wp print out of posts-->
        <article>
            <?php
            if (have_posts()) {
                the_content();
            }
            ?>
        </article>

<!--widget-->
        <?php
        if (is_active_sidebar('hem')) : ?>
            <div id="hem">
                <?php dynamic_sidebar('hem'); ?>
            </div>
        <?php endif; ?>

    </section>
</div>




<?php get_footer(); ?>