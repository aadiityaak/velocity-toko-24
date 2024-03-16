<div class="side-navbar bg-theme py-3 d-flex justify-content-md-between flex-wrap flex-column" id="sidebar">
    <div class="d-md-none d-block text-end p-0">
        <a class="btn border-0 text-white px-3" id="close-btn"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
    <?php
    wp_nav_menu(
        [
            'theme_location'  => 'sidebar_menu',
            'container_class' => 'sidebar-body-menu',
            'container_id'    => '',
            'menu_class'      => 'nav flex-column',
            'fallback_cb'     => '',
            'menu_id'         => 'sidebar-menu',
            'depth'           => 4,
            'walker'          => new justg_WP_Bootstrap_Navwalker(),
        ]
    );
    ?>
</div>