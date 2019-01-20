<div class="site-branding">

    <?php
    $blog_info = get_bloginfo( 'name' );
    $description = get_bloginfo( 'description', 'display' );
    ?>
    
    <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
            <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
                <?php bloginfo( 'name' ); ?>
            <?php endif; ?>
        </a>

        <?php if ( has_nav_menu( 'menu-1' ) ) : ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_class'     => 'main-menu',
                        'items_wrap'     => '<li id="%1$s" class="navbar-nav%2$s">%3$s</li>',
                    )
                );
                ?>
            </ul>
        </div>
        <?php endif; ?>
    </nav>

	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
</div><!-- .site-branding -->
