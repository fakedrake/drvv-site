<?php
/**
 * Admin theme page
 *
 * @package Fluida
 */

// Framework
require_once( get_template_directory() . "/cryout/framework.php" );

// Theme particulars
require_once( get_template_directory() . "/admin/defaults.php" );
require_once( get_template_directory() . "/admin/options.php" );
require_once( get_template_directory() . "/includes/tgmpa.php" );

// Custom CSS Styles for customizer
require_once( get_template_directory() . "/includes/custom-styles.php" );

// Get the theme options and make sure defaults are used if no values are set
if (!function_exists('fluida_get_theme_options')):
function fluida_get_theme_options() {
	$optionsFluida = wp_parse_args(
		get_option( 'fluida_settings', array() ),
		fluida_get_option_defaults()
	);
	return apply_filters( 'fluida_theme_options_array', $optionsFluida );
} // fluida_get_theme_options()
endif;

if (!function_exists('fluida_get_theme_structure')):
function fluida_get_theme_structure() {
	global $fluida_big;
	return apply_filters( 'fluida_theme_structure_array', $fluida_big );
} // fluida_get_theme_structure()
endif;

// load up theme options
$cryout_theme_settings = apply_filters( 'fluida_theme_structure_array', $fluida_big );
$cryout_theme_options = fluida_get_theme_options();
$cryout_theme_defaults = fluida_get_option_defaults();

// Hooks/Filters
add_action( 'admin_menu', 'fluida_add_page_fn' );

// Add admin scripts
function fluida_admin_scripts( $hook ) {
	global $fluida_page;
	if( $fluida_page != $hook ) {
        return;
    }

	wp_enqueue_style( 'wp-jquery-ui-dialog' );
	wp_enqueue_style( 'fluida-admin-style', get_template_directory_uri() . '/admin/css/admin.css', NULL, _CRYOUT_THEME_VERSION );
	wp_enqueue_script( 'fluida-admin-js',get_template_directory_uri() . '/admin/js/admin.js', array('jquery-ui-dialog'), _CRYOUT_THEME_VERSION );
}

// Create admin subpages
function fluida_add_page_fn() {
	global $fluida_page;
	$fluida_page = add_theme_page( __( 'Fluida Theme', 'fluida' ), __( 'Fluida Theme', 'fluida' ), 'edit_theme_options', 'about-fluida-theme', 'fluida_page_fn' );
	add_action( 'admin_enqueue_scripts', 'fluida_admin_scripts' );
} // fluida_add_page_fn()

// Display the admin options page

function fluida_page_fn() {

	$fluids = cryout_get_option();

	if (!current_user_can('edit_theme_options'))  {
		wp_die( __( 'Sorry, but you do not have sufficient permissions to access this page.', 'fluida') );
	}

?>

<div class="wrap" id="main-page"><!-- Admin wrap page -->
	<div id="lefty">
	<?php if( isset($_GET['settings-loaded']) ) { ?>
		<div class="updated fade">
			<p><?php _e('Fluida settings loaded successfully.', 'fluida') ?></p>
		</div> <?php
	} ?>
	<?php
	// Reset settings to defaults if the reset button has been pressed
	if ( isset( $_POST['fluida_reset_defaults'] ) ) {
		delete_option( 'fluida_settings' ); ?>
		<div class="updated fade">
			<p><?php _e('Fluida settings have been reset successfully.', 'fluida') ?></p>
		</div> <?php
	} ?>

		<div id="admin_header">
			<img src="<?php echo get_template_directory_uri() . '/admin/images/logo-about-top.png' ?>" />
			<span class="version">
				Fluida Theme v<?php echo _CRYOUT_THEME_VERSION; ?> by
				<a href="https://www.cryoutcreations.eu" target="_blank">Cryout Creations</a><br>
				<?php do_action( 'cryout_admin_version' ); ?>
			</span>
		</div>

		<div id="admin_links">
			<a href="https://www.cryoutcreations.eu/wordpress-themes/fluida" target="_blank"><?php _e( 'Fluida Homepage', 'fluida' ) ?></a>
			<a href="https://www.cryoutcreations.eu/forum" target="_blank"><?php _e( 'Theme Support', 'fluida' ) ?></a>
			<a href="https://www.cryoutcreations.eu" target="_blank">Cryout Creations</a>
		</div>


		<div id="description">
			<h3> Fluida Flows </h3>
			<p> Fluida is a modern, crystal clear and squeaky clean theme. It shines bright with a fluid and responsive layout and carries under its hood a light
			and powerful framework. All the theme's graphics are created using HTML5, CSS3 and icon fonts so it's extremely fast to load. </p>
			<p>It's also SEO ready, using microformats and Google readable Schema.org microdata. Fluida also provides over 100 customizer theme settings that enable
			you to take full control of your site. You can change everything starting with layout (content and up to 2 sidebars), site and sidebar widths, colors,
			(Google) fonts and font sizes for all the important elements of your blog, featured images, post information metas, post excerpts, comments and much more. </p>
			<p>Fluida also features social menus with over 100 social network icons available in 4 locations, 3 menus, 6 widget areas, 8 page templates, all post formats,
			is translation ready, RTL and compatible with older browsers. </p>
			<p>If you want to take things further via a child theme you'll find clean code, either hookable or
			pluggable functions with clear descriptions and over 25 action hooks ready for action.</p>
		</div>

		<a class="button" href="customize.php" id="customizer"> <?php _e( 'Customize Fluida', 'fluida' ); ?> </a>

	</div><!--lefty -->


	<div id="righty" >
		<div id="fluida-donate" class="postbox donate">

			<h3 class="hndle"> Coffee Break </h3>
			<div class="inside">
				<p>When Fluida flows the website glows and the frontend loads what the backend tows. And as the user knows, confidence grows and content inevitability shows.
				   With high and lows, some error throws and constant blows, Fluida owes rows upon rows of dropped jaws and tickled toes. But where Fluida goes, nobody can tell.</p>
				<p><em> That last one didn't quite make the rhyme, did it? Wanna fix it?</em></p>

				<div style="display:block;float:none;margin:0 auto;text-align:center;">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_donations">
						<input type="hidden" name="business" value="KYL26KAN4PJC8">
						<input type="hidden" name="item_name" value="Cryout Creations - Fluida Theme">
						<input type="hidden" name="currency_code" value="EUR">
						<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHosted">
						<input type="image" src="<?php echo get_template_directory_uri() . '/admin/images/coffee.png' ?>" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>

			</div><!-- inside -->

		</div><!-- donate -->

		<div id="fluida-export" class="postbox export" >

			<h3 class="hndle"><?php _e( 'Settings Management', 'fluida' ); ?></h3>
			<div class="panel-wrap inside">

				<input id="fluida-themesettings" name="fluida-themesettings" type="hidden" value="<?php echo htmlentities(cryout_savesettings($fluids)) ?>">
				<button class="button" id="fluida-savesettings-button"> <?php _e('Save Theme Settings', 'fluida'); ?> </button>
				<br />

				<button class="button" id="fluida-loadsettings-button"> <?php _e('Load Theme Settings', 'fluida'); ?> </button>
				<br />

				<form action="" method="post">
					<input type="hidden" name="fluida_reset_defaults" value="true" />
					<input type="submit" class="button" id="fluida_reset_defaults" value="<?php _e( 'Reset to Defaults', 'fluida' ); ?>" />
				</form>

				<div id="fluida-settings-dialog" title="Settings Management">
				  <p>
					<strong><?php _e('Copy-paste all the information below to a file of your choosing and save it to a safe location.','fluida') ?></strong>
					<strong><?php _e('Paste your previously saved settings in the field below and press the Load button.<br><u>All your current settings will be overwritten!</u>','fluida') ?></strong><br>
					<br>
					<textarea id="fluida-themesettings-textarea"></textarea>
					<input name="fluida-settings-nonce" id="fluida-settings-nonce" type="hidden" value="<?php echo wp_create_nonce( "cryout-special-string" ); ?>">
				  </p>
				</div>


			</div><!-- inside -->

		</div><!-- export -->

		<div id="fluida-news" class="postbox news" >
			<h3 class="hndle"><?php _e( 'Theme Updates', 'fluida' ); ?></h3>
			<div class="panel-wrap inside">
			</div><!-- inside -->
		</div><!-- news -->

	</div><!--  righty -->
</div><!--  wrap -->

<script type="text/javascript">
var reset_confirmation = '<?php echo esc_html( __( 'Reset Fluida Settings to Defaults?', 'fluida' ) ); ?>';
</script> <?php
} // fluida_page_fn()
