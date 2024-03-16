<?php

/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package justg
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = velocitytheme_option('justg_container_type', 'container');
?>

<div class="wrapper" id="archive-wrapper">

    <div class="<?php echo esc_attr($container); ?> p-0" id="content" tabindex="-1">

        <?php require_once(get_stylesheet_directory() . '/inc/home-slider.php'); ?>
        <div class="row m-0">

            <!-- Do the left sidebar check -->
            <?php do_action('justg_before_content'); ?>

            <main class="site-main col order-2" id="main">

                <div class="card mb-3 bg-gray color-theme border py-2 px-3 fs-6 fw-bold">
                    <?php echo get_option('blogname') . ' - ' . get_option('blogdescription'); ?>
                </div>

                <?php
                require_once(get_stylesheet_directory() . '/inc/home-products.php');
                require_once(get_stylesheet_directory() . '/inc/home-blogs.php');
                ?>

            </main><!-- #main -->

            <!-- Do the right sidebar check. -->
            <?php do_action('justg_after_content'); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
