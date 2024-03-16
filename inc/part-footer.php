<footer class="site-footer container p-md-0 mb-2" id="colophon">
    <?php if (is_active_sidebar('footer-widget-1') || is_active_sidebar('footer-widget-2') || is_active_sidebar('footer-widget-3') || is_active_sidebar('footer-widget-4')) : ?>
        <div class="footer-sidebar bg-white">
            <div class="row mx-0 border py-2">
                <?php
                for ($x = 1; $x <= 4; $x++) :
                    if (is_active_sidebar('footer-widget-' . $x)) :
                        echo '<div class="col-md-3 px-2">';
                        dynamic_sidebar('footer-widget-' . $x);
                        echo '</div>';
                    endif;
                endfor;
                ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="site-info bg-theme text-center text-white py-3">
        <small>
            © <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved.
            <br>
            Design by <a class="opacity-50 text-white" href="https://velocitydeveloper.com" target="_blank" rel="noopener noreferrer"> Velocity Developer </a>
        </small>
    </div>
    <!-- .site-info -->

</footer>