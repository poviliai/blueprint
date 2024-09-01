<div class="d-flex justify-content-start col-12 col-md-3 col-lg-4">
    <?php if (get_theme_mod( 'site_logo' ) ): ?>
    <a href="<?php echo esc_url( home_url( '/' )); ?>">
        <img src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="img-fluid">
    </a>
    <?php else : ?>
        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
    <?php endif; ?>
</div>