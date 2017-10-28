<?php
/**
 * The Sidebar that is normally displayed on the right side (Secondary).
 *
 * @package Fluida
 */
?>

<aside id="secondary" class="widget-area sidey" role="complementary" <?php cryout_schema_microdata( 'sidebar' );?>>
	<?php cryout_before_secondary_widgets_hook(); ?>

	<?php if ( is_active_sidebar( 'widget-area-right' ) ): 
				dynamic_sidebar( 'widget-area-right' );
		  else:
			if ( current_user_can( 'edit_theme_options' ) ) { ?>
		  
			<section class="widget-container widget-placeholder">
				<h3 class="widget-title"><?php _e( 'Right Sidebar', 'fluida' ); ?></h3>
				<p>
					<?php
						printf( __( 'You currently have no widgets set in the right sidebar. You can add widgets via the <a href="%s">Dashboard</a>.', 'fluida' ), esc_url( admin_url() . "widgets.php" ) ); echo "<br/>";
						printf( __( 'To hide this sidebar, switch to a different Layout via the <a href="%s">Theme Customizations</a>.', 'fluida' ), esc_url( admin_url() . "customize.php" ) );
					?>
				</p>
			</section>
			
			<?php }
		  endif; ?>

	<?php cryout_after_primary_widgets_hook(); ?>
</aside>
