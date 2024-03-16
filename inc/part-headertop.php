<div class="container-fluid header-top p-md-0 mt-2">
    <div class="row align-items-center justify-content-between m-0 py-1 px-2 bg-white">
        <div class="col-md-12 kontak-seller text-md-center text-end p-0 py-2"><?php echo do_shortcode('[kontak style="false"]'); ?></div>
    </div>

    <div class="container mx-auto d-flex align-items-center justify-content-between m-0 py-2">
        <?php $sitelogo = velocitytheme_option('custom_logo'); ?>
        <div class="logo-header">
            <?php if ($sitelogo) : ?>
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo wp_get_attachment_image_url($sitelogo, 'full'); ?>" alt="Site Logo" loading="lazy">
                </a>
            <?php endif;  ?>
        </div>
        <div class="profile-icons px-2 order-1">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="p-2"><?php echo do_shortcode('[profile]'); ?></div>
                <div class="p-2"><?php echo do_shortcode('[cart]'); ?></div>
            </div>
        </div>
    </div>
</div>