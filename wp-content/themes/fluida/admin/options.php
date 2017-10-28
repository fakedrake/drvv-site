<?php
/**
 * Customizer settings and other theme related settings (fonts arrays, widget areas)
 *
 * @package Fluida
 */

/* active_callback for controls that depend on other controls' values */
function fluida_conditionals( $control ) {

	$conditionals = array(
		array(
			'id'	=> 'fluida_lpsliderimage',
			'parent'=> 'fluida_lpslider',
			'value'	=> 1,
		),
		array(
			'id'	=> 'fluida_lpslidertitle',
			'parent'=> 'fluida_lpslider',
			'value'	=> 1,
		),
		array(
			'id'	=> 'fluida_lpslidertext',
			'parent'=> 'fluida_lpslider',
			'value'	=> 1,
		),
		array(
			'id'	=> 'fluida_lpslidershortcode',
			'parent'=> 'fluida_lpslider',
			'value'	=> 2,
		),
		array(
			'id'	=> 'fluida_lpsliderserious',
			'parent'=> 'fluida_lpslider',
			'value' => 4,
		),
		array(
			'id'	=> 'fluida_lpposts',
			'parent'=> 'fluida_landingpage',
			'value'	=> 1,
		),
		array(
			'id'	=> 'fluida_lpposts_more',
			'parent'=> 'fluida_landingpage',
			'value'	=> 1,
		),
		array(
			'id' 	=> 'fluida_titleaccent',
			'parent'=> 'fluida_siteheader',
			'value'	=> 'title',
		),
		array(
			'id' 	=> 'fluida_titleaccent',
			'parent'=> 'fluida_siteheader',
			'value'	=> 'both',
		),
	);

	foreach ($conditionals as $elem) {
		if ( $control->id == 'fluida_settings['.$elem['id'].']' && $control->manager->get_setting('fluida_settings['.$elem['parent'].']')->value() == $elem['value'] ) return true;
	};

    return false;

} // fluida_conditionals()


$fluida_big = array(

/************* general info ***************/

'info_sections' => array(
	'cryoutspecial-about-theme' => array(
		'title' => __( 'About', 'cryout' ) . ' ' . ucwords(_CRYOUT_THEME_NAME),
		'desc' => '<img src=" ' . get_template_directory_uri() . '/admin/images/logo-about-header.png" ><br>' . __( 'Got a question? Need help?', 'cryout' ),
	),
), // info_sections

'info_settings' => array(
	'support_link_faqs' => array(
		'label' => '',
		'default' => sprintf( '<a href="https://www.cryoutcreations.eu/wordpress-themes/' . _CRYOUT_THEME_NAME . '" target="_blank">%s</a>', __( 'Read the Docs', 'cryout' ) ),
		'desc' =>  '',
		'section' => 'cryoutspecial-about-theme',
	),
	'support_link_forum' => array(
		'label' => '',
		'default' => sprintf( '<a href="https://www.cryoutcreations.eu/forums/f/wordpress/' . cryout_sanitize_tn( _CRYOUT_THEME_NAME ) . '" target="_blank">%s</a>', __( 'Browse the Forum', 'cryout' ) ),
		'desc' => '',
		'section' => 'cryoutspecial-about-theme',
	),
	'premium_support_link' => array(
		'label' => '',
		'default' => sprintf( '<a href="https://www.cryoutcreations.eu/priority-support" target="_blank">%s</a>', __( 'Priority Support', 'cryout' ) ),
		'desc' => '',
		'section' => 'cryoutspecial-about-theme',
	),
	'rating_url' => array(
		'label' => __('Rating', 'cryout'),
		'default' => sprintf( '<a href="https://wordpress.org/support/view/theme-reviews/'. cryout_sanitize_tn( _CRYOUT_THEME_NAME ).'#postform" target="_blank">%s</a>', sprintf( __( 'Rate %s on WordPress.org', 'cryout' ) , ucwords(_CRYOUT_THEME_NAME) ) ),
		'desc' => __('If you like the theme, rate it. If you hate the theme, rate it as well. Let us know how we can make it better.', 'cryout'),
		'section' => 'cryoutspecial-about-theme',
	),
	'management' => array(
		'label' => __('Manage Theme Settings', 'cryout') ,
		'default' => sprintf( '<a href="themes.php?page=about-' . cryout_sanitize_tn( _CRYOUT_THEME_NAME ) . '-theme">%s</a>', __('Manage Theme Settings', 'cryout') ),
		'desc' => __('Theme settings can be saved, loaded or reset from the theme\'s about page.', 'cryout'),
		'section' => 'cryoutspecial-about-theme',
	),
), // info_settings

'panel_overrides' => array(
	'background' => array(
        'title' => __( 'Background', 'cryout' ),
		'desc' => __( 'Background Settings.', 'cryout' ),
		'priority' => 50,
		'section' => 'cryoutoverride-fluida_siteidentity',
		'replaces' => 'background_image',
		'type' => 'section',
	),
	'fluida_header_section' => array(
		'title' => __( 'Header Image', 'cryout' ),
		'desc' => __( 'Header Image Settings.', 'cryout' ),
		'priority' => 50,
		'section' => 'cryoutoverride-fluida_siteidentity',
		'replaces' => 'header_image',
		'type' => 'section',
	),
	'identity' => array(
		'title' => __( 'Site Identity', 'cryout' ),
		'desc' => '',
		'priority' => 50,
		'section' => 'cryoutoverride-fluida_siteidentity',
		'replaces' => 'title_tagline',
		'type' => 'section',
	),
	'colors' => array(
		'section' => 'section',
		'replaces' => 'colors',
		'type' => 'remove',
	),

), // panel_overrides

/************* panels *************/

'panels' => array(

	array('id'=>'fluida_siteidentity', 'title'=>__('Site Identity','fluida'), 'callback'=>'', 'identifier'=>'cryoutoverride-' ),
	array('id'=>'fluida_landingpage', 'title'=>__('Landing Page','fluida'), 'callback'=>'', 'sid'=>'' ),
	array('id'=>'fluida_general_section', 'title'=>__('General','fluida') , 'callback'=>''),
	array('id'=>'fluida_text_section', 'title'=>__('Typography','fluida'), 'callback'=>''),
	array('id'=>'fluida_post_section', 'title'=>__('Post Information','fluida') , 'callback'=>''),

), // panels

/************* sections *************/

'sections' => array(

	// layout
	array('id'=>'fluida_layout', 'title'=>__('Layout', 'fluida'), 'callback'=>'', 'sid'=>'', 'priority'=>51 ),
	// header
	array('id'=>'fluida_siteheader', 'title'=>__('Header','fluida'), 'callback'=>'', 'sid'=> '', 'priority'=>52 ),
	// landing page
	array('id'=>'fluida_lpgeneral', 'title'=>__('Settings','fluida'), 'callback'=>'', 'sid'=>'fluida_landingpage', ),
	array('id'=>'fluida_lpslider', 'title'=>__('Slider','fluida'), 'callback'=>'', 'sid'=>'fluida_landingpage', ),
	array('id'=>'fluida_lpblocks', 'title'=>__('Featured Icon Blocks','fluida'), 'callback'=>'', 'sid'=>'fluida_landingpage', ),
	array('id'=>'fluida_lpboxes1', 'title'=>__('Featured Boxes Top','fluida'), 'callback'=>'', 'sid'=>'fluida_landingpage', ),
	array('id'=>'fluida_lpboxes2', 'title'=>__('Featured Boxes Bottom','fluida'), 'callback'=>'', 'sid'=>'fluida_landingpage', ),
	array('id'=>'fluida_lptexts', 'title'=>__('Text Areas','fluida'), 'callback'=>'', 'sid'=>'fluida_landingpage', ),
	// text
	array('id'=>'fluida_fontfamily', 'title'=>__('General Font','fluida'), 'callback'=>'', 'sid'=> 'fluida_text_section'),
	array('id'=>'fluida_fontheader', 'title'=>__('Header Fonts','fluida'), 'callback'=>'', 'sid'=> 'fluida_text_section'),
	array('id'=>'fluida_fontwidget', 'title'=>__('Widget Fonts','fluida'), 'callback'=>'', 'sid'=> 'fluida_text_section'),
	array('id'=>'fluida_fontcontent', 'title'=>__('Content Fonts','fluida'), 'callback'=>'', 'sid'=> 'fluida_text_section'),
	array('id'=>'fluida_textformatting', 'title'=>__('Formatting','fluida'), 'callback'=>'', 'sid'=> 'fluida_text_section'),
	// general
	array('id'=>'fluida_contentstructure', 'title'=>__('Structure','fluida'), 'callback'=>'', 'sid'=> 'fluida_general_section'),
	array('id'=>'fluida_colors', 'title'=>__('Colors','fluida'), 'callback'=>'', 'sid'=> '', 'priority'=>61 ),
	array('id'=>'fluida_contentgraphics', 'title'=>__('Decorations','fluida'), 'callback'=>'', 'sid'=> 'fluida_general_section'),
	array('id'=>'fluida_postimage', 'title'=>__('Post Images','fluida'), 'callback'=>'', 'sid'=> 'fluida_general_section'),
	array('id'=>'fluida_searchbox', 'title'=>__('Search Box Locations','fluida'), 'callback'=>'', 'sid'=> 'fluida_general_section'),
	array('id'=>'fluida_socials', 'title'=>__('Social Icons','fluida'), 'callback'=>'', 'sid'=>'fluida_general_section'),
	// post info
	array('id'=>'fluida_featured', 'title'=>__('Featured Image', 'fluida'), 'callback'=>'', 'sid'=>'fluida_post_section'),
	array('id'=>'fluida_metas', 'title'=>__('Meta Information','fluida'), 'callback'=>'', 'sid'=> 'fluida_post_section'),
	array('id'=>'fluida_excerpts', 'title'=>__('Excerpts','fluida'), 'callback'=>'', 'sid'=> 'fluida_post_section'),
	array('id'=>'fluida_comments', 'title'=>__('Comments','fluida'), 'callback'=>'', 'sid'=> 'fluida_post_section'),
	// post excerpt
	array('id'=>'fluida_excerpthome', 'title'=>__('Home Page','fluida'), 'callback'=>'', 'sid'=> 'excerpt_section'),
	array('id'=>'fluida_excerptsticky', 'title'=>__('Sticky Posts','fluida'), 'callback'=>'', 'sid'=> 'excerpt_section'),
	array('id'=>'fluida_excerptarchive', 'title'=>__('Archive and Category Pages','fluida'), 'callback'=>'', 'sid'=> 'excerpt_section'),
	array('id'=>'fluida_excerptlength', 'title'=>__('Post Excerpt Length ','fluida'), 'callback'=>'', 'sid'=> 'excerpt_section'),
	array('id'=>'fluida_excerptdots', 'title'=>__('Excerpt suffix','fluida'), 'callback'=>'', 'sid'=> 'excerpt_section'),
	array('id'=>'fluida_excerptcont', 'title'=>__('Continue reading link text ','fluida'), 'callback'=>'', 'sid'=> 'excerpt_section'),
	// misc
	array('id'=>'fluida_misc', 'title'=>__('Miscellaneous','fluida'), 'callback'=>'', 'sid'=>'', 'priority'=>82 ),

	/*** developer options ***/
	//array('id'=>'fluida_developer', 'title'=>__('[ Developer Options ]','fluida'), 'callback'=>'', 'sid'=>'', 'priority'=>101 ),

), // sections

/************ clone options *********/
'clones' => array (
	'fluida_lpboxes' => 2,
),

/************* settings *************/

'options' => array (
	//////////////////////////////////////////////////// Layout ////////////////////////////////////////////////////
	array(
	'id' => 'fluida_sitelayout',
		'type' => 'radioimage',
		'label' => __('Main Layout','fluida'),
		'choices' => array(
			'1c' => array(
				'label' => __("One column (no sidebars)","fluida"),
				'url'   => '%s/admin/images/1c.png'
			),
			'2cSr' => array(
				'label' => __("Two columns, sidebar on the right","fluida"),
				'url'   => '%s/admin/images/2cSr.png'
			),
			'2cSl' => array(
				'label' => __("Two columns, sidebar on the left","fluida"),
				'url'   => '%s/admin/images/2cSl.png'
			),
			'3cSr' => array(
				'label' => __("Three columns, sidebars on the right","fluida"),
				'url'   => '%s/admin/images/3cSr.png'
			),
			'3cSl' => array(
				'label' => __("Three columns, sidebars on the left","fluida"),
				'url'   => '%s/admin/images/3cSl.png'
			),
			'3cSs' => array(
				'label' => __("Three columns, one sidebar on each side","fluida"),
				'url'   => '%s/admin/images/3cSs.png'
			),
		),
		'desc' => __("Defines the general site layout.<br>This can be overridden for individual pages.","fluida"),
	'section' => 'fluida_layout' ),
	array(
	'id' => 'fluida_sitewidth',
		'type' => 'slider',
		'label' => 'Site Width',
		'min' => 960, 'max' => 1920, 'step' => 10, 'um' => 'px',
		'desc' => __("Select the maximum width (in pixels) of your site.","fluida"),
	'section' => 'fluida_layout' ),

	/* array(
	'id' => 'fluida_contentwidth',
		'type' => 'slidertwo',
		'label' => 'Content/Sidebar Widths',
		'min' => 20, 'max' => 80, 'step' => 1, 'total' => 100, 'um' => '%',
		'desc' => __("Select the width (in percentage) of your <b>content</b> and <b>sidebar(s)</b>. When using a 3 columns layout (with 2 sidebars) they will each have half the configured width.","fluida"),
	'section' => 'fluida_layout' ), */

	array(
	'id' => 'fluida_layoutalign',
		'type' => 'select',
		'label' => __('Theme alignment','fluida'),
		'values' => array( 0, 1, 2, 3 ),
		'labels' => array( __('Left contained','fluida'), __('Left','fluida'), __('Center (default)','fluida'), __('Center contained','fluida') ),
		'desc' => __("Control how the entire theme content is aligned in the browser","fluida"),
	'section' => 'fluida_layout' ),

	array(
	'id' => 'fluida_primarysidebar',
		'type' => 'slider',
		'label' => 'Left Sidebar Width',
		'min' => 200, 'max' => 600, 'step' => 10, 'um' => 'px',
		'desc' => __("Width (in pixels) of the left sidebar.","fluida"),
	'section' => 'fluida_layout' ),
	array(
	'id' => 'fluida_secondarysidebar',
		'type' => 'slider',
		'label' => 'Right Sidebar Width',
		'min' => 200, 'max' => 600, 'step' => 10, 'um' => 'px',
		'desc' => __("Width (in pixels) of the right sidebar.","fluida"),
	'section' => 'fluida_layout' ),

	array(
	'id' => 'fluida_magazinelayout',
		'type' => 'radioimage',
		'label' => __('Magazine Layout','fluida'),
		'choices' => array(
			'1' => array(
				'label' => __("One column","fluida"),
				'url'   => '%s/admin/images/magazine-1col.png'
			),
			'2' => array(
				'label' => __("Two columns","fluida"),
				'url'   => '%s/admin/images/magazine-2col.png'
			),
			'3' => array(
				'label' => __("Three columns","fluida"),
				'url'   => '%s/admin/images/magazine-3col.png'
			),
		),
		'desc' => __("This layout applies to post lists and will arrange posts in columns.","fluida"),
	'section' => 'fluida_layout' ),
	array(
	'id' => 'fluida_contentmargintop',
		'type' => 'number',
		'label' => __('Margin top','fluida'),
		'desc' => __("Set the margin (in pixels) between the content and the menu/header image. It can be set to 0 if you want the content area and menu to join. (Negative values are also accepted for a nice effect.)","fluida"),
	'section' => 'fluida_layout' ),
	array(
	'id' => 'fluida_contentpadding',
		'type' => 'number',
		'label' => __('Site left/right padding','fluida'),
		'desc' => __("Set the left/right padding (in pixels) on the site middle area.","fluida"),
	'section' => 'fluida_layout' ),
	array(
	'id' => 'fluida_elementpadding',
		'type' => 'select',
		'label' => __('Post/page left/right padding','fluida'),
		'values' => cryout_gen_values( 0, 10, 1, array('um'=>'') ),
		'desc' => __("Set the left/right padding (in percent) for each page/post/content element.","fluida"),
	'section' => 'fluida_layout' ),

	array(
	'id' => 'fluida_footercols',
		'type' => 'select',
		'label' => __("Footer Widgets Columns","fluida"),
		'values' => array(0, 1, 2, 3, 4),
		'labels' => array( "All in a row" , "1 Column", "2 Columns" , "3 Columns" , "4 Columns" ),
		'desc' => __("Set the number of footer widgets to display per row.","fluida"),
	'section' => 'fluida_layout' ),
	array(
	'id' => 'fluida_footeralign',
		'type' => 'select',
		'values' => array( 0 , 1 ),
		'labels' => array( __("Default","fluida"), __("Center","fluida") ),
		'label' => __('Footer Widgets Alignment','fluida'),
		'desc' => __("Activate to center align footer widgets.","fluida"),
	'section' => 'fluida_layout' ),

	// Header
	array(
	'id' => 'fluida_menuheight',
		'type' => 'number',
		'min' => 45,
		'max' => 200,
		'label' => __('Header/Menu Height','fluida'),
		'desc' => __("Select the menu/title height (in pixels).","fluida"),
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_menustyle',
		'type' => 'select',
		'values' => array( 0 , 1 ),
		'labels' => array( __("Normal","fluida"), __("Fixed","fluida") ),
		'label' => __('Menu Style','fluida'),
		'desc' => __("Select the menu appearance style.","fluida"),
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_menulayout',
		'type' => 'select',
		'values' => array( 0 , 1, 2 ),
		'labels' => array( __("Left", "fluida"), __("Right","fluida"), __("Center","fluida") ),
		'label' => __('Menu Layout','fluida'),
		'desc' => __("Select the main menu's layout","fluida"),
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_headerheight',
		'type' => 'number',
		'min' => 0,
		'max' => 800,
		'label' => __('Header Image Height','fluida'),
		'desc' => __("Select the header image height (in pixels). After changing this setting you will need to re-set your header image (if you've used a cropped image before) and recreate your featured images if you've enabled the featured image as header image option (under Featured Image).","fluida"),
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_headerresponsive',
		'type' => 'select',
		'values' => array( 0 , 1 ),
		'labels' => array( __("Cropped","fluida"), __("Responsive","fluida") ),
		'label' => __('Header Image Behaviour','fluida'),
		'desc' => __("Select how your header image looks and behaves.<br> A <strong>Responsive</strong> header image will scale depending on the viewed resolution, while a <strong>Cropped</strong> header image will always have the configured height.","fluida"),
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_siteheader',
		'type' => 'select',
		'label' => __('Site Header Content','fluida'),
		'values' => array( 'title' , 'logo' , 'both' , 'empty' ),
		'labels' => array( __("Site Title","fluida"), __("Logo","fluida"), __("Logo & Site Title","fluida"), __("Empty","fluida") ),
		'desc' => '',
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_sitetagline',
		'type' => 'checkbox',
		'label' => __('Show Tagline','fluida'),
		'desc' => '',
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_titleaccent',
		'type' => 'select',
		'label' => __('Title Accent','fluida'),
		'values' => cryout_gen_values( 0, 20, 1 ),
		'desc' => __('Letter index the accent should apply to. Set to zero to disable accent effect.','fluida'),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_logoupload',
		'type' => 'media-image',
		'label' => __('Logo Image','fluida'),
		'desc' => __("The logo will appear in the header.","fluida"),
		'disable_if' => 'the_custom_logo',
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_headerwidgetwidth',
		'type' => 'select',
		'label' => __("Header Widget Width","fluida"),
		'values' => array( "100%" , "60%" , "50%" , "33%" , "25%" ),
		'desc' => '',
	'section' => 'fluida_siteheader' ),
	array(
	'id' => 'fluida_headerwidgetalign',
		'type' => 'select',
		'label' => __("Header Widget Alignment","fluida"),
		'values' => array( 'left' , 'center' , 'right' ),
		'labels' => array( __("Left","fluida"), __("Center","fluida"), __("Right","fluida") ),
		'desc' => __("The header widget area will be displayed on top of the header image when set.","fluida"),
	'section' => 'fluida_siteheader' ),

	//////////////////////////////////////////////////// Landing Page ////////////////////////////////////////////////////
	array(
	'id' => 'fluida_landingpage',
		'type' => 'select',
		'label' => __('Landing Page','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enabled","fluida"), __("Disabled (use WordPress homepage)","fluida") ),
		'desc' => __("Enable the theme's Landing Page homepage feature on your homepage.","fluida"),
	'section' => 'fluida_lpgeneral' ),
	array(
	'id' => 'fluida_lplayout',
		'type' => 'select',
		'label' => __('Layout','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Contained","fluida"), __("Wide","fluida") ),
		'desc' => '',
	'section' => 'fluida_lpgeneral' ),
	array(
	'id' => 'fluida_lpposts',
		'type' => 'select',
		'label' => __( 'Posts', 'fluida' ),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enabled","fluida"), __("Disabled","fluida") ),
		'desc' => __("Show or hide posts on the landing page.","fluida"),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpgeneral' ),
	array(
	'id' => 'fluida_lpposts_more',
		'type' => 'text',
		'label' => __( 'More posts label', 'fluida' ),
		'desc' => __("Define the text used on the 'read more posts' button.","fluida"),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpgeneral' ),

	// slider
	array(
	'id' => 'fluida_lpslider',
		'type' => 'select',
		'label' => __('Slider','fluida'),
		'values' => array( 4, 2, 1, 3, 0 ),
		'labels' => array( __("Serious Slider", "fluida"), __("Use Shortcode","fluida"), __("Static Image","fluida"), __("Header Image","fluida"), __("Disabled","fluida") ),
		'desc' => sprintf( __("Landing page slider functionality. To create an advanced slider, use our <a href='%s' target='_blank'>Serious Slider</a> plugin or any other slider plugin.","fluida"), 'https://wordpress.org/plugins/cryout-serious-slider/' ),
	'section' => 'fluida_lpslider' ),
	array(
	'id' => 'fluida_lpsliderimage',
		'type' => 'media-image',
		'label' => __('Slider Image','fluida'),
		'desc' => __('The default image can be replaced by setting a new static image.', 'fluida'),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpslider' ),
	array(
	'id' => 'fluida_lpslidertitle',
		'type' => 'text',
		'label' => __('Slider Caption','fluida'),
		'desc' => '',
		'input_attrs' => array( 'placeholder' => __('Title', 'fluida') ),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpslider' ),
	array(
	'id' => 'fluida_lpslidertext',
		'type' => 'textarea',
		'label' => '',
		'desc' => '',
		'input_attrs' => array( 'placeholder' => __('Text', 'fluida') ),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpslider' ),
	array(
	'id' => 'fluida_lpsliderlink',
		'type' => 'url',
		'label' => __('Slider Link','fluida'),
		'desc' => '',
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpslider' ),
	array(
	'id' => 'fluida_lpslidershortcode',
		'type' => 'text',
		'label' => __('Shortcode','fluida'),
		'desc' => __('Enter shortcode provided by slider plugin. The plugin will be responsible for the slider\'s appearance.','fluida'),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpslider' ),
	array(
	'id' => 'fluida_lpsliderserious',
		'type' => 'select',
		'label' => __('Serious Slider','fluida'),
		'values' => cryout_serious_slides_for_customizer(1, 0),
		'labels' => cryout_serious_slides_for_customizer(2, __(' - Please install, activate or update Serious Slider plugin - ', 'fluida'), __(' - No sliders defined - ', 'fluida') ),
		'desc' => __('Select the desired slider from the list. Sliders can be administered in the dashboard.','fluida'),
		'active_callback' => 'fluida_conditionals',
	'section' => 'fluida_lpslider' ),

	// blocks
	array(
	'id' => 'fluida_lpblockmaintitle',
		'type' => 'text',
		'label' => __('Section Title','fluida'),
		'desc' => '',
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblockmaindesc',
		'type' => 'textarea',
		'label' => __( 'Section Description', 'fluida' ),
		'desc' => __("Configure a title and description for this section.","fluida"),
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblockoneicon',
		'type' => 'iconselect',
		'label' => __('Block One','fluida'),
		'values' => array(),
		'labels' => array(),
		'desc' => '',
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblockone',
		'type' => 'select',
		'label' => '',
		'values' => cryout_pages_for_customizer(1, __('- Disabled - ', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('- Disabled - ', 'fluida') ),
		'desc' => __("Define the content and icon.","fluida"),
	'section' => 'fluida_lpblocks' ),

	array(
	'id' => 'fluida_lpblocktwoicon',
		'type' => 'iconselect',
		'label' => __('Block Two','fluida'),
		'values' => array(),
		'labels' => array(),
		'desc' => '',
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblocktwo',
		'type' => 'select',
		'label' => '',
		'values' => cryout_pages_for_customizer(1, __('- Disabled - ', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('- Disabled - ', 'fluida') ),
		'desc' => __("Define the content and icon.","fluida"),
	'section' => 'fluida_lpblocks' ),

	array(
	'id' => 'fluida_lpblockthreeicon',
		'type' => 'iconselect',
		'label' => __('Block Three','fluida'),
		'values' => array(),
		'labels' => array(),
		'desc' => '',
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblockthree',
		'type' => 'select',
		'label' => '',
		'values' => cryout_pages_for_customizer(1, __('- Disabled - ', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('- Disabled - ', 'fluida') ),
		'desc' => __("Define the content and icon.","fluida"),
	'section' => 'fluida_lpblocks' ),

	array(
	'id' => 'fluida_lpblockfouricon',
		'type' => 'iconselect',
		'label' => __('Block Four','fluida'),
		'values' => array(),
		'labels' => array(),
		'desc' => '',
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblockfour',
		'type' => 'select',
		'label' => '',
		'values' => cryout_pages_for_customizer(1, __('- Disabled - ', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('- Disabled - ', 'fluida') ),
		'desc' => __("Define the content and icon.","fluida"),
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblockscontent',
		'type' => 'select',
		'label' => __('Blocks Content','fluida'),
		'values' => array( 0, 1, 2 ),
		'labels' => array( __("Excerpt","fluida"), __("Full Content","fluida"), __("Disabled","fluida") ),
		'desc' => __("Configure the length and appearance of the text.","fluida"),
	'section' => 'fluida_lpblocks' ),
	array(
	'id' => 'fluida_lpblocksclick',
		'type' => 'checkbox',
		'label' => __('Make icons clickable (linking to their respective pages).','fluida'),
		'desc' => '',
	'section' => 'fluida_lpblocks' ),


	// boxes #cloned#
	array(
	'id' => 'fluida_lpboxmaintitle#',
		'type' => 'text',
		'label' => __('Section Title','fluida'),
		'desc' => __("Configure the title for this section.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxmaindesc#',
		'type' => 'textarea',
		'label' => __( 'Section Description', 'fluida' ),
		'desc' => __("Configure the description for this section.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxcat#',
		'type' => 'select',
		'label' => __('Boxes Content','fluida'),
		'values' => cryout_categories_for_customizer(1, __('All Categories', 'fluida'), __('- Disabled - ', 'fluida') ),
		'labels' => cryout_categories_for_customizer(2, __('All Categories', 'fluida'), __('- Disabled - ', 'fluida') ),
		'desc' => __("Select the category from which to create landing page boxes.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxcount#',
		'type' => 'number',
		'input_attrs' => array(
			'min' => 1,
			'max' => 100,
		),
		'label' => __('Number of Boxes','fluida'),
		'desc' => __("Configure the number of boxes to display on the landing page.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxrow#',
		'type' => 'select',
		'label' => __('Boxes Per Row','fluida'),
		'values' => array( 1, 2, 3, 4 ),
		'desc' => __("Number of boxes displayed per line.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxheight#',
		'type' => 'number',
		'input_attrs' => array(
			'min' => 1,
			'max' => 2000,
		),
		'label' => __('Box Height','fluida'),
		'desc' => __("Configure the box image height (in pixels). The width is a percentage dependent on total site width and number of columns per row.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxlayout#',
		'type' => 'select',
		'label' => __('Box Layout','fluida'),
		'values' => array( 1, 2 ),
		'labels' => array( __("Full width","fluida"), __("Boxed (content width)","fluida") ),
		'desc' => __("Choose the layout for the box section.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxmargins#',
		'type' => 'select',
		'label' => __('Box Margins','fluida'),
		'values' => array( 1, 2 ),
		'labels' => array( __("Undivided","fluida"), __("Divided","fluida") ),
		'desc' => __("Choose box arrangement between devided and undevided.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxanimation#',
		'type' => 'select',
		'label' => __('Box Content','fluida'),
		'values' => array( 1, 2 ),
		'labels' => array( __("Animated","fluida"), __("Static","fluida") ),
		'desc' => __("Choose how the box content is shown. 'Animated' makes the content appear on hover while 'static' displays content beneath the image.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxreadmore#',
		'type' => 'text',
		'label' => __('Read More Button','fluida'),
		'desc' => __("Configure the 'Read More' link text.","fluida"),
	'section' => 'fluida_lpboxes#' ),
	array(
	'id' => 'fluida_lpboxlength#',
		'type' => 'number',
		'input_attrs' => array(
			'min' => 1,
			'max' => 100,
		),
		'label' => __('Content Length','fluida'),
		'desc' => __("Limit the text length (in words).","fluida"),
	'section' => 'fluida_lpboxes#' ),

	// texts
	array(
	'id' => 'fluida_lptextone',
		'type' => 'select',
		'label' => __('Text Area 1','fluida'),
		'values' => cryout_pages_for_customizer(1, __('Disabled', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('Disabled', 'fluida') ),
		'desc' => __("This text area is displayed between the slider and the columns","fluida"),
	'section' => 'fluida_lptexts' ),
	array(
	'id' => 'fluida_lptexttwo',
		'type' => 'select',
		'label' => __('Text Area 2','fluida'),
		'values' => cryout_pages_for_customizer(1, __('Disabled', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('Disabled', 'fluida') ),
		'desc' => __("This text area is displayed between the columns and the posts","fluida"),
	'section' => 'fluida_lptexts' ),
	array(
	'id' => 'fluida_lptextthree',
		'type' => 'select',
		'label' => __('Text Area 3','fluida'),
		'values' => cryout_pages_for_customizer(1, __('Disabled', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('Disabled', 'fluida') ),
		'desc' => __("This text area is displayed between the columns and the posts","fluida"),
	'section' => 'fluida_lptexts' ),
	array(
	'id' => 'fluida_lptextfour',
		'type' => 'select',
		'label' => __('Text Area 4','fluida'),
		'values' => cryout_pages_for_customizer(1, __('Disabled', 'fluida') ),
		'labels' => cryout_pages_for_customizer(2, __('Disabled', 'fluida') ),
		'desc' => __("This text area is displayed below the posts list.<br><br>Page properties that will be used:<br>- page title as text title<br>- page content as text content<br>- page featured image as text area background image","fluida"),
	'section' => 'fluida_lptexts' ),


	//////////////////////////////////////////////////// Colors ////////////////////////////////////////////////////

	array(
	'id' => 'fluida_sitebackground',
		'type' => 'color',
		'label' => __('Site Background','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_sitetext',
		'type' => 'color',
		'label' => __('Site Text','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_headingstext',
		'type' => 'color',
		'label' => __('Content Headings','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_contentbackground',
		'type' => 'color',
		'label' => __('Content Background','fluida'),
		'desc' => __('Main content and primary sidebar','fluida'),
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_contentbackground2',
		'type' => 'color',
		'label' => __('Secondary Content Background','fluida'),
		'desc' => __('Secondary sidebar','fluida'),
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_menubackground',
		'type' => 'color',
		'label' => __('Header Background','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_menutext',
		'type' => 'color',
		'label' => __('Menu Text','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_submenutext',
		'type' => 'color',
		'label' => __('Submenu Text','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_footerbackground',
		'type' => 'color',
		'label' => __('Footer Background','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_footertext',
		'type' => 'color',
		'label' => __('Footer Text','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_accent1',
		'type' => 'color',
		'label' => __('Primary Accent','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),
	array(
	'id' => 'fluida_accent2',
		'type' => 'color',
		'label' => __('Secondary Accent','fluida'),
		'desc' => '',
	'section' => 'fluida_colors' ),

	//////////////////////////////////////////////////// Fonts ////////////////////////////////////////////////////
	array( // general font
	'id' => 'fluida_fgeneralsize',
		'type' => 'select',
		'label' => __('General Font','fluida'),
		'values' => cryout_gen_values( 10, 26, 1, array('um'=>'px') ),
		'desc' => '',
	'section' => 'fluida_fontfamily' ),
	array(
	'id' => 'fluida_fgeneralweight',
		'type' => 'select',
		'label' => '',
		'values' => array('300','400','700','800'),
		'labels' => array( __('300 (ligher)','fluida'), __('400 (normal)','fluida'), __('700 (bold)','fluida'), __('800 (bolder)','fluida') ),
		'desc' => '',
	'section' => 'fluida_fontfamily' ),
	array(
	'id' => 'fluida_fgeneral',
		'type' => 'font',
		'label' => '',
		'desc' => __("Select the general font options for the the site. This will apply to all content that is not controlled by the rest of the font options.","fluida"),
	'section' => 'fluida_fontfamily' ),
	array(
	'id' => 'fluida_fgeneralgoogle',
		'type' => 'googlefont',
		'label' => '',
		'desc' => __("Insert a Google font name/identifier in the field above to override the selected built-in font.<br><br>When using Google Fonts for General Font make sure they also have multiple font weights and that you specify them all eg.: <em>Roboto:400,300,500,700</em><br><br> <strong>Additional Info:</strong><br>The fonts under the <em>Preferred Theme Fonts</em> category are recommended for this because they have all the font weights used throughout the theme.","fluida"),
		'input_attrs' => array( 'placeholder' => __('or enter Google Font','fluida') ),
	'section' => 'fluida_fontfamily' ),

	array( // site title font
	'id' => 'fluida_fsitetitlesize',
		'type' => 'select',
		'label' => __('Site Title','fluida'),
		'values' => cryout_gen_values( 90, 250, 10, array('um'=>'%') ),
		'desc' => '',
	'section' => 'fluida_fontheader' ),
	array(
	'id' => 'fluida_fsitetitleweight',
		'type' => 'select',
		'label' => '',
		'values' => array('300','400','700','800'),
		'labels' => array( __('300 (ligher)','fluida'), __('400 (normal)','fluida'), __('700 (bold)','fluida'), __('800 (bolder)','fluida') ),
		'desc' => '',
	'section' => 'fluida_fontheader' ),
	array(
	'id' => 'fluida_fsitetitle',
		'type' => 'font',
		'label' => '',
		'desc' => '',
	'section' => 'fluida_fontheader' ),
	array(
	'id' => 'fluida_fsitetitlegoogle',
		'type' => 'text',
		'label' => '',
		'desc' => __("Insert a Google font name/identifier in the field above to override the selected font.","fluida"),
		'input_attrs' => array( 'placeholder' => __('or enter Google Font','fluida') ),
	'section' => 'fluida_fontheader' ),

	array( // menu font
	'id' => 'fluida_fmenusize',
		'type' => 'select',
		'label' => __('Main Menu','fluida'),
		'values' => cryout_gen_values( 80, 140, 5, array('um'=>'%') ),
		'desc' => '',
	'section' => 'fluida_fontheader' ),
	array(
	'id' => 'fluida_fmenuweight',
		'type' => 'select',
		'label' => '',
		'values' => array('300','400','700','800'),
		'labels' => array( __('300 (ligher)','fluida'), __('400 (normal)','fluida'), __('700 (bold)','fluida'), __('800 (bolder)','fluida') ),
		'desc' => '',
	'section' => 'fluida_fontheader' ),
	array(
	'id' => 'fluida_fmenu',
		'type' => 'font',
		'label' => '',
		'desc' => __("Insert a Google font name/identifier in the field above to override the selected font.","fluida"),
	'section' => 'fluida_fontheader' ),
	array(
	'id' => 'fluida_fmenugoogle',
		'type' => 'googlefont',
		'label' => '',
		'desc' => '',
		'input_attrs' => array( 'placeholder' => __('or enter Google Font','fluida') ),
	'section' => 'fluida_fontheader' ),

	array( // widget fonts
	'id' => 'fluida_fwtitlesize',
		'type' => 'select',
		'label' => __('Widget Title','fluida'),
		'values' => cryout_gen_values( 80, 120, 10, array('um'=>'%') ),
		'desc' => '',
	'section' => 'fluida_fontwidget' ),
	array(
	'id' => 'fluida_fwtitleweight',
		'type' => 'select',
		'label' => '',
		'values' => array('300','400','700','800'),
		'labels' => array( __('300 (ligher)','fluida'), __('400 (normal)','fluida'), __('700 (bold)','fluida'), __('800 (bolder)','fluida') ),
		'desc' => '',
	'section' => 'fluida_fontwidget' ),
	array(
	'id' => 'fluida_fwtitle',
		'type' => 'font',
		'label' => '',
		'desc' => '',
	'section' => 'fluida_fontwidget' ),
	array(
	'id' => 'fluida_fwtitlegoogle',
		'type' => 'googlefont',
		'label' => '',
		'desc' => __("Insert a Google font name/identifier in the field above to override the selected font.","fluida"),
		'input_attrs' => array( 'placeholder' => __('or enter Google Font','fluida') ),
	'section' => 'fluida_fontwidget' ),

	array(
	'id' => 'fluida_fwcontentsize',
		'type' => 'select',
		'label' => __('Widget Content','fluida'),
		'values' => cryout_gen_values( 80, 120, 10, array('um'=>'%') ),
		'desc' => '',
	'section' => 'fluida_fontwidget' ),
	array(
	'id' => 'fluida_fwcontentweight',
		'type' => 'select',
		'label' => '',
		'values' => array('300','400','700','800'),
		'labels' => array( __('300 (ligher)','fluida'), __('400 (normal)','fluida'), __('700 (bold)','fluida'), __('800 (bolder)','fluida') ),
		'desc' => '',
	'section' => 'fluida_fontwidget' ),
	array(
	'id' => 'fluida_fwcontent',
		'type' => 'font',
		'label' => '',
		'desc' => '',
	'section' => 'fluida_fontwidget' ),
	array(
	'id' => 'fluida_fwcontentgoogle',
		'type' => 'googlefont',
		'label' => '',
		'desc' => __("Insert a Google font name/identifier in the field above to override the selected font.","fluida"),
		'input_attrs' => array( 'placeholder' => __('or enter Google Font','fluida') ),
	'section' => 'fluida_fontwidget' ),

	array( // content fonts
	'id' => 'fluida_ftitlessize',
		'type' => 'select',
		'label' => __('Post/Page Titles','fluida'),
		'values' => cryout_gen_values( 130, 300, 10, array('um'=>'%') ),
		'desc' => '',
	'section' => 'fluida_fontcontent' ),
	array(
	'id' => 'fluida_ftitlesweight',
		'type' => 'select',
		'label' => '',
		'values' => array('300','400','700','800'),
		'labels' => array( __('300 (ligher)','fluida'), __('400 (normal)','fluida'), __('700 (bold)','fluida'), __('800 (bolder)','fluida') ),
		'desc' => '',
	'section' => 'fluida_fontcontent' ),
	array(
	'id' => 'fluida_ftitles',
		'type' => 'font',
		'label' => '',
		'desc' => '',
	'section' => 'fluida_fontcontent' ),
	array(
	'id' => 'fluida_ftitlesgoogle',
		'type' => 'googlefont',
		'label' => '',
		'desc' => __("Insert a Google font name/identifier in the field above to override the selected font.","fluida"),
		'input_attrs' => array( 'placeholder' => __('or enter Google Font','fluida') ),
	'section' => 'fluida_fontcontent' ),

	array(
	'id' => 'fluida_fheadingssize',
		'type' => 'select',
		'label' => __('Headings','fluida'),
		'values' => cryout_gen_values( 100, 150, 10, array('um'=>'%') ),
		'desc' => '',
	'section' => 'fluida_fontcontent' ),
	array(
	'id' => 'fluida_fheadingsweight',
		'type' => 'select',
		'label' => '',
		'values' => array('300','400','700','800'),
		'labels' => array( __('300 (ligher)','fluida'), __('400 (normal)','fluida'), __('700 (bold)','fluida'), __('800 (bolder)','fluida') ),
		'desc' => '',
	'section' => 'fluida_fontcontent' ),
	array(
	'id' => 'fluida_fheadings',
		'type' => 'font',
		'label' => '',
		'desc' => '',
	'section' => 'fluida_fontcontent' ),
	array(
	'id' => 'fluida_fheadingsgoogle',
		'type' => 'text',
		'label' => '',
		'desc' => __("Insert a Google font name/identifier in the field above to override the selected font.","fluida"),
		'input_attrs' => array( 'placeholder' => __('or enter Google Font','fluida') ),
	'section' => 'fluida_fontcontent' ),

	array( // formatting
	'id' => 'fluida_lineheight',
		'type' => 'select',
		'label' => __('General Line Height','fluida'),
		'values' => cryout_gen_values( 1.0, 2.4, 0.2, array('um'=>'em') ),
		'desc' => "",
	'section' => 'fluida_textformatting' ),
	array(
	'id' => 'fluida_textalign',
		'type' => 'select',
		'label' => __('Content Text Alignment','fluida'),
		'values' => array( "Default" , "Left" , "Right" , "Justify" , "Center" ),
		'labels' => array( __("Default","fluida"), __("Left","fluida"), __("Right","fluida"), __("Justify","fluida"), __("Center","fluida") ),
		'desc' => __("This overwrites the text alignment in posts and pages. Leave 'Default' for browser default.","fluida"),
	'section' => 'fluida_textformatting' ),
	array(
	'id' => 'fluida_paragraphspace',
		'type' => 'select',
		'label' => __('Content Paragraph Spacing','fluida'),
		'values' => cryout_gen_values( 0.5, 1.6, 0.1, array('um'=>'em', 'pre'=>array('0.0em') ) ),
		'desc' => __("Select the spacing between the paragraphs.","fluida"),
	'section' => 'fluida_textformatting' ),
	array(
	'id' => 'fluida_parindent',
		'type' => 'select',
		'label' => __('Content Paragraph Indentation','fluida'),
		'values' => cryout_gen_values( 0, 2, 0.5, array('um'=>'em') ),
		'desc' => __("Choose the indentation for your paragraphs.","fluida"),
	'section' => 'fluida_textformatting' ),

	//////////////////////////////////////////////////// Structure ////////////////////////////////////////////////////

	array(
	'id' => 'fluida_breadcrumbs',
		'type' => 'select',
		'label' => __('Breadcrumbs','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enable","fluida"), __("Disable","fluida") ),
		'desc' => __("Show breadcrumbs at the top of the content. Breadcrumbs are a form of navigation that keeps track of your location within the site.","fluida"),
	'section' => 'fluida_contentstructure' ),
	array(
	'id' => 'fluida_pagination',
		'type' => 'select',
		'label' => __('Pagination','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enable","fluida"), __("Disable","fluida") ),
		'desc' => __("Show numbered pagination. Where there is more than one page, instead of the bottom <em>Older Posts</em> and <em>Newer posts</em> links you will have a numbered pagination. ","fluida"),
	'section' => 'fluida_contentstructure' ),
	array(
	'id' => 'fluida_contenttitles',
		'type' => 'select',
		'label' => __('Page/Category Titles','fluida'),
		'values' => array( 1, 2, 3, 0 ),
		'labels' => array( __('Always Visible','fluida'), __('Hide on Pages','fluida'), __('Hide on Categories','fluida'), __('Always Hidden','fluida') ),
		'desc' => __("Control the visibility of titles on pages, categories and/or archives.","fluida"),
	'section' => 'fluida_contentstructure' ),
	array(
	'id' => 'fluida_totop',
		'type' => 'select',
		'label' => __('Back to Top Button','fluida'),
		'values' => array( 'fluida-totop-normal', 'fluida-totop-fixed', 'fluida-totop-disabled' ),
		'labels' => array( __("Bottom of page","fluida"), __("In footer","fluida"), __("Disabled","fluida") ),
		'desc' => __('Control where the "Back to Top" button appears.',"fluida"),
	'section' => 'fluida_contentstructure' ),
	array(
	'id' => 'fluida_tables',
		'type' => 'select',
		'label' => __('Tables Style','fluida'),
		'values' => array( 'fluida-no-table', 'fluida-clean-table', 'fluida-stripped-table', 'fluida-bordered-table' ),
		'labels' => array( __("No border","fluida"), __("Clean","fluida"), __("Stripped","fluida"), __("Bordered","fluida") ),
		'desc' => __('Control tables borders appearance.',"fluida"),
	'section' => 'fluida_contentstructure' ),
	array(
	'id' => 'fluida_normalizetags',
		'type' => 'select',
		'label' => __('Tags Cloud Appearance','fluida'),
		'values' => array( 0, 1 ),
		'labels' => array( __("Size Emphasis","fluida"), __("Uniform Boxes","fluida") ),
		'desc' => __('Control tags cloud appearance.',"fluida"),
	'section' => 'fluida_contentstructure' ),
array(
		'id' => 'fluida_copyright',
		'type' => 'textarea',
		'label' => __( 'Custom Footer Text', 'fluida' ),
		'desc' => __("Insert custom text or basic HTML code that will appear in your footer. <br /> You can use HTML to insert links, images and special characters.","fluida"),
		'section' => 'fluida_contentstructure' ),

	//////////////////////////////////////////////////// Graphics ////////////////////////////////////////////////////

	array(
	'id' => 'fluida_elementborder',
		'type' => 'checkbox',
		'label' => __('Border','fluida'),
		'desc' => '',
	'section' => 'fluida_contentgraphics' ),
	array(
	'id' => 'fluida_elementshadow',
		'type' => 'checkbox',
		'label' => __('Shadow','fluida'),
		'desc' => '',
	'section' => 'fluida_contentgraphics' ),
	array(
	'id' => 'fluida_elementborderradius',
		'type' => 'checkbox',
		'label' => __('Rounded Corners','fluida'),
		'desc' => __('These decorations apply to certain theme elements.','fluida'),
	'section' => 'fluida_contentgraphics' ),
	array(
	'id' => 'fluida_articleanimation',
		'type' => 'select',
		'label' => __('Article Animation on Scroll','fluida'),
		'values' => array( 0, 1, 2, 3),
		'labels' => array( __("None","fluida"), __("Fade","fluida"), __("Scroll","fluida"), __("Grow","fluida") ),
		'desc' => __('Choose how to animate the articles when they become visible while scrolling the page.',"fluida"),
	'section' => 'fluida_contentgraphics' ),

	//////////////////////////////////////////////////// Search Box ////////////////////////////////////////////////////

	array(
	'id' => 'fluida_searchboxmain',
		'type' => 'checkbox',
		'label' => __('Add Search to Main Menu','fluida'),
		'desc' => '',
	'section' => 'fluida_searchbox' ),
	array(
	'id' => 'fluida_searchboxfooter',
		'type' => 'checkbox',
		'label' => __('Add Search to Footer Menu','fluida'),
		'desc' => '',
	'section' => 'fluida_searchbox' ),

	//////////////////////////////////////////////////// Post Image ////////////////////////////////////////////////////

	array(
	'id' => 'fluida_image_style',
		'type' => 'radioimage',
		'label' => __('Post Images Style','fluida'),
		'choices' => array(
			'fluida-image-none' => array(
				'label' => __("No Styling","fluida"),
				'url'   => '%s/admin/images/image-style-0.png'
			),
			'fluida-image-one' => array(
				'label' => __("Style 1","fluida"),
				'url'   => '%s/admin/images/image-style-1.png'
			),
			'fluida-image-two' => array(
				'label' => __("Style 2","fluida"),
				'url'   => '%s/admin/images/image-style-2.png'
			),
			'fluida-image-three' => array(
				'label' => __("Style 3","fluida"),
				'url'   => '%s/admin/images/image-style-3.png'
			),
			'fluida-image-four' => array(
				'label' => __("Style 4","fluida"),
				'url'   => '%s/admin/images/image-style-4.png'
			),
			'fluida-image-five' => array(
				'label' => __("Style 5","fluida"),
				'url'   => '%s/admin/images/image-style-5.png'
			),
		),
		'desc' => __("Define the border style for your images. Applies to captionless images in posts and pages.","fluida"),
	'section' => 'fluida_postimage' ),
	array(
	'id' => 'fluida_caption_style',
		'type' => 'select',
		'label' => __('Post Captions Style','fluida'),
		'values' => array( 'fluida-caption-zero', 'fluida-caption-one', 'fluida-caption-two' ),
		'labels' => array( __('Plain','fluida'), __('With Border','fluida'), __('With Background','fluida') ),
		'desc' => __("Define the caption style for your images. Applies to images that have captions. ","fluida"),
	'section' => 'fluida_postimage' ),


	//////////////////////////////////////////////////// Post Information ////////////////////////////////////////////////////

	array( // meta
	'id' => 'fluida_meta_author',
		'type' => 'checkbox',
		'label' => __("Display Author","fluida"),
		'desc' => '',
	'section' => 'fluida_metas' ),
	array(
	'id' => 'fluida_meta_date',
		'type' => 'checkbox',
		'label' => __("Display Date","fluida"),
		'desc' => '',
	'section' => 'fluida_metas' ),
	array(
	'id' => 'fluida_meta_time',
		'type' => 'checkbox',
		'label' => __("Display Time","fluida"),
		'desc' => '',
	'section' => 'fluida_metas' ),
	array(
	'id' => 'fluida_meta_category',
		'type' => 'checkbox',
		'label' => __("Display Category","fluida"),
		'desc' => '',
	'section' => 'fluida_metas' ),
	array(
	'id' => 'fluida_meta_tag',
		'type' => 'checkbox',
		'label' => __("Display Tags","fluida"),
		'desc' => '',
	'section' => 'fluida_metas' ),
	array(
	'id' => 'fluida_meta_comment',
		'type' => 'checkbox',
		'label' => __("Display Comments","fluida"),
		'desc' => __("Choose the meta information you want to show on posts.","fluida"),
	'section' => 'fluida_metas' ),

	array( // comments
	'id' => 'fluida_comclosed',
		'type' => 'select',
		'label' => __('Comments Closed Text','fluida'),
		'values' => array( 1, 2, 3, 0 ), // "Show" , "Hide in posts", "Hide in pages", "Hide everywhere"
		'labels' => array( __("Show","fluida"), __("Hide in posts","fluida"), __("Hide in pages","fluida"), __("Hide everywhere","fluida") ),
		'desc' => __("Controls the <b>Comments are closed</b> text normally visible on pages and posts with comments disabled.","fluida"),
	'section' => 'fluida_comments' ),
	array(
	'id' => 'fluida_comdate',
		'type' => 'select',
		'label' => __('Comment Date Format','fluida'),
		'values' => array( 1, 2 ),
		'labels' => array( __("Date Published","fluida"), __("Time difference","fluida") ),
		'desc' => __("Controls the comments' meta date format. While choosing <strong>Date Published</strong> shows the date when the comment was posted,
					<strong>Time difference</strong> shows the time that has passed since the comment was posted (ex.: <u>1 hour ago</u>, <u>5 mins ago</u>, <u>2 days ago</u>).","fluida"),
	'section' => 'fluida_comments' ),
	array(
	'id' => 'fluida_comlabels',
		'type' => 'select',
		'label' => __('Comment Field Label','fluida'),
		'values' => array( 1, 2 ),
		'labels' => array( __("Placeholders","fluida"), __("Labels","fluida") ),
		'desc' => __("Controls the comment form field labels appearance. Change to labels for better compatibility with comment-related plugins.","fluida"),
	'section' => 'fluida_comments' ),
	array(
	'id' => 'fluida_comformwidth',
		'type' => 'number',
		'label' => __('Comment form width','fluida'),
		'desc' => __("In pixels. Sets the maximum width for the comment form. Entering 0 as the value makes the comment form full width.","fluida"),
	'section' => 'fluida_comments' ),

	array( // excerpts
	'id' => 'fluida_excerpthome',
		'type' => 'select',
		'label' => __( 'Posts on Homepage', 'fluida' ),
		'values' => array( 'excerpt', 'full' ),
		'labels' => array( __("Excerpt","fluida"), __("Full Post","fluida") ),
		'desc' => __("Controls posts appearance on homepage. Only applies to standard posts; other post formats (aside, image, chat, quote etc.) have their specific formatting.","fluida"),
	'section' => 'fluida_excerpts' ),
	array(
	'id' => 'fluida_excerptsticky',
		'type' => 'select',
		'label' => __( 'Sticky Posts on Homepage', 'fluida' ),
		'values' => array( 'excerpt', 'full' ),
		'labels' => array( __("Inherit","fluida"), __("Full Post","fluida") ),
		'desc' => __("Controls sticky posts appearance on the homepage.","fluida"),
	'section' => 'fluida_excerpts' ),
	array(
	'id' => 'fluida_excerptarchive',
		'type' => 'select',
		'label' => __( 'Posts in Categories/Archives', 'fluida' ),
		'values' => array( 'excerpt', 'full' ),
		'labels' => array( __("Excerpt","fluida"), __("Full Post","fluida") ),
		'desc' => __("Controls posts appearance in archive, category and search pages. Only applies to standard posts.","fluida"),
	'section' => 'fluida_excerpts' ),
	array(
	'id' => 'fluida_excerptlength',
		'type' => 'number',
		'label' => __( 'Excerpt Length' , 'fluida' ),
		'desc' => __("The number of words for excerpts. When excerpts are used posts are truncated to the number of words and a <i>Continue reading</i> link is appended linking to the full post page." , "fluida"),
	'section' => 'fluida_excerpts' ),
	array(
	'id' => 'fluida_excerptdots',
		'type' => 'text',
		'label' => __( 'Excerpt Suffix', 'fluida' ),
		'desc' => __("Defines the three dots '[...]' that are appended automatically to excerpts.","fluida"),
	'section' => 'fluida_excerpts' ),
	array(
	'id' => 'fluida_excerptcont',
		'type' => 'text',
		'label' => __( 'Continue Reading Link', 'fluida' ),
		'desc' => __("Defines the 'Continue Reading' link text appended to post excerpts.","fluida"),
	'section' => 'fluida_excerpts' ),

	//////////////////////////////////////////////////// Featured Images ////////////////////////////////////////////////////
	array(
	'id' => 'fluida_fpost',
		'type' => 'select',
		'label' => __( 'Featured Images', 'fluida' ),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enabled","fluida"), __("Disabled","fluida") ),
		'desc' => '',
	'section' => 'fluida_featured' ),
	array(
	'id' => 'fluida_fauto',
		'type' => 'select',
		'label' => __( 'Auto Select Images From Posts Content', 'fluida' ),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enabled","fluida"), __("Disabled","fluida") ),
		'desc' => __("Show the first image that you inserted in a post as a thumbnail. If there is a Featured Image selected for that post, it will have priority.","fluida"),
	'section' => 'fluida_featured' ),
	array(
	'id' => 'fluida_fheight',
		'type' => 'number',
		'label' => __( 'Max Featured Image Height', 'fluida' ),
		'desc' => __("In pixels. The width is not configurable as it is site-width and layout dependent.", "fluida") . '<br>' . 
				 __("<u style='color: #990000;'>Remember to regenerate your thumbnails after changing this value</u>", "fluida"),
	'section' => 'fluida_featured' ),
	array(
	'id' => 'fluida_fresponsive',
		'type' => 'select',
		'values' => array( 0 , 1 ),
		'labels' => array( __("Cropped","fluida"), __("Responsive","fluida") ),
		'label' => __('Featured Image Behaviour','fluida'),
		'desc' => __("Select how your featured image looks and behaves.<br>A <strong>Responsive</strong> featured image will scale depending on the viewed resolution, while a <strong>Cropped</strong> featured image will always have the configured height.","fluida"),
	'section' => 'fluida_featured' ),
	array(
	'id' => 'fluida_falign',
		'type' => 'select',
		'label' => __( 'Featured Image Alignment', 'fluida' ),
		'values' => array( "left top" , "left center", "left bottom", "right top", "right center", "right bottom", "center top", "center center", "center bottom" ),
		'labels' => array( __("Left Top","fluida"), __("Left Center","fluida"), __("Left Bottom","fluida"), __("Right Top","fluida"), __("Right Center","fluida"), __("Right Bottom","fluida"), __("Center Top","fluida"), __("Center Center","fluida"), __("Center Bottom","fluida") ),
		'desc' => __("<u style='color: #990000;'>Remember to regenerate your thumbnails after changing this value</u>", "fluida"),
	'section' => 'fluida_featured' ),

	array(
	'id' => 'fluida_fheader',
		'type' => 'select',
		'label' => __('Featured Images in Header','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enable","fluida"), __("Disable","fluida") ),
		'desc' => __("Show featured image as header image for posts/pages that have a Featured Image set and if the image is at least 60% of the header image size.","fluida"),
	'section' => 'fluida_featured' ),

	//////////////////////////////////////////////////// Social Positions ////////////////////////////////////////////////////

	array(
	'id' => 'fluida_socials_header',
		'type' => 'checkbox',
		'label' => __( 'Display in Header', 'fluida' ),
		'desc' => '',
	'section' => 'fluida_socials' ),
	array(
	'id' => 'fluida_socials_footer',
		'type' => 'checkbox',
		'label' => __( 'Display in Footer', 'fluida' ),
		'desc' => '',
	'section' => 'fluida_socials' ),
	array(
	'id' => 'fluida_socials_left_sidebar',
		'type' => 'checkbox',
		'label' => __( 'Display in Left Sidebar', 'fluida' ),
		'desc' => '',
	'section' => 'fluida_socials' ),
	array(
	'id' => 'fluida_socials_right_sidebar',
		'type' => 'checkbox',
		'label' => __( 'Display in Right Sidebar', 'fluida' ),
		'desc' => sprintf( __( 'Select where social icons should be visible in.<br><br><strong>Social Icons are defined using the <a href="%1$s" target="_blank">social icons menu</a></strong>. Read the <a href="%2$s" target="_blank">theme documentation</a> on how to create a social menu.', 'fluida' ), 'nav-menus.php?action=locations', 'http://www.cryoutcreations.eu/wordpress-tutorials/use-new-social-menu' ),
	'section' => 'fluida_socials' ),

	//////////////////////////////////////////////////// Miscellaneous ////////////////////////////////////////////////////

	array(
	'id' => 'fluida_customcss',
		'type' => 'textarea',
		'label' => __( 'Custom Theme CSS', 'fluida' ),
		'desc' => __("Insert your custom theme CSS. Styling declarations made here will override the theme's if they are specific enough.","fluida"),
	'section' => 'fluida_misc' ),
	array(
		'id' => 'fluida_customcss_notice',
		'type' => 'hint',
		'label' => '',
		'desc' => __("Since version 4.7 WordPress includes an Additional CSS field of its own. We recommend you switch to using that one for better options consistency.","fluida"),
		'require_fn' => 'wp_get_custom_css',
		'section' => 'fluida_misc' ),
	array(
	'id' => 'fluida_masonry',
		'type' => 'select',
		'label' => __('Masonry','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enable","fluida"), __("Disable","fluida") ),
		'desc' => __("Disable to troubleshoot compatibility with plugins that dynamically add content to post lists and change length.","fluida"),
	'section' => 'fluida_misc' ),
	array(
	'id' => 'fluida_defer',
		'type' => 'select',
		'label' => __('JS Defer loading','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enable","fluida"), __("Disable","fluida") ),
		'desc' => __("Disable to troubleshoot compatibility with JS scripts that appears to malfunction.","fluida"),
	'section' => 'fluida_misc' ),
	array(
	'id' => 'fluida_fitvids',
		'type' => 'select',
		'label' => __('FitVids','fluida'),
		'values' => array( 1, 2, 0 ),
		'labels' => array( __("Enable","fluida"), __("Enable on mobiles","fluida"), __("Disable","fluida") ),
		'desc' => __("Disable to troubleshoot embedded video resize issues.","fluida"),
	'section' => 'fluida_misc' ),
	array(
	'id' => 'fluida_autoscroll',
		'type' => 'select',
		'label' => __('Autoscroll','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enable","fluida"), __("Disable","fluida") ),
		'desc' => '',
	'section' => 'fluida_misc' ),
	array(
	'id' => 'fluida_editorstyles',
		'type' => 'select',
		'label' => __('Editor Styles','fluida'),
		'values' => array( 1, 0 ),
		'labels' => array( __("Enable","fluida"), __("Disable","fluida") ),
		'desc' => __("Apply the theme's styles to the WordPress editor.","fluida"),
	'section' => 'fluida_misc' ),
	//////////////////////////////////////////////////// !!! DEVELOPER !!! ////////////////////////////////////////////////////
	// nothing for now

), // options

/* option=array(
	type: checkbox, select, textarea, input, function
	id: field_name or custom_function_name
	values: value_0, value_1, value_2 | true/false | number
	labels: __('Label 0','context'), ... | __('Enabled','context')/... |  number/__('Once','context')/...
	desc: html to be displayed at the question mark
	section: section_id

	array(
	'id' => '',
		'type' => '',
		'label' => '',
		'values' => array(  ),
		'labels' => array(  ),
		'desc' => '',
		'input_attrs' => array(  ),
		// conditionals
		'disable_if' => 'function_name',
		'require_fn' => 'function_name',
		'display_width' => '?????',
	'section' => '' ),

*/

/*** fonts ***/
'fonts' => array(

	'Preferred Theme Fonts'=> array(
					"Source Sans Pro/gfont",
					"Ubuntu/gfont",
					"Ubuntu Condensed/gfont",
					"Open Sans/gfont",
					"Open Sans Condensed:300/gfont",
					"Droid Sans/gfont",
					"Oswald/gfont",
					"Yanone Kaffeesatz/gfont",
					),
	'Sans-Serif' => array(
					"Segoe UI, Arial, sans-serif",
					"Verdana, Geneva, sans-serif" ,
					"Geneva, sans-serif",
					"Helvetica Neue, Arial, Helvetica, sans-serif",
					"Helvetica, sans-serif" ,
					"Century Gothic, AppleGothic, sans-serif",
				    "Futura, Century Gothic, AppleGothic, sans-serif",
					"Calibri, Arian, sans-serif",
				    "Myriad Pro, Myriad,Arial, sans-serif",
					"Trebuchet MS, Arial, Helvetica, sans-serif" ,
					"Gill Sans, Calibri, Trebuchet MS, sans-serif",
					"Impact, Haettenschweiler, Arial Narrow Bold, sans-serif",
					"Tahoma, Geneva, sans-serif" ,
					"Arial, Helvetica, sans-serif" ,
					"Arial Black, Gadget, sans-serif",
					"Lucida Sans Unicode, Lucida Grande, sans-serif"
					),
	'Serif' => array(
					"Georgia, Times New Roman, Times, serif",
					"Times New Roman, Times, serif",
					"Cambria, Georgia, Times, Times New Roman, serif",
					"Palatino Linotype, Book Antiqua, Palatino, serif",
					"Book Antiqua, Palatino, serif",
					"Palatino, serif",
				    "Baskerville, Times New Roman, Times, serif",
 					"Bodoni MT, serif",
					"Copperplate Light, Copperplate Gothic Light, serif",
					"Garamond, Times New Roman, Times, serif"
					),
	'MonoSpace' => array(
					"Courier New, Courier, monospace" ,
					"Lucida Console, Monaco, monospace",
					"Consolas, Lucida Console, Monaco, monospace",
					"Monaco, monospace"
					),
	'Cursive' => array(
					"Lucida Casual, Comic Sans MS, cursive",
				    "Brush Script MT, Phyllis, Lucida Handwriting, cursive",
					"Phyllis, Lucida Handwriting, cursive",
					"Lucida Handwriting, cursive",
					"Comic Sans MS, cursive"
					)
	), // fonts

/*** google font option fields ***/
'google-font-enabled-fields' => array(
	'fluida_fgeneral',
	'fluida_fsitetitle',
	'fluida_fmenu',
	'fluida_fwtitle',
	'fluida_fwcontent',
	'fluida_ftitles',
	'fluida_fheadings',
	),

/*** landing page blocks icons ***/
'block-icons' => array(
	'no-icon' => '&nbsp;',
	'toggle' => 'e003',
	'layout' => 'e004',
	'lock' => 'e007',
	'unlock' => 'e008',
	'target' => 'e012',
	'disc' => 'e019',
	'microphone' => 'e048',
	'play' => 'e052',
	'cloud2' => 'e065',
	'cloud-upload' => 'e066',
	'cloud-download' => 'e067',
	'plus2' => 'e114',
	'minus2' => 'e115',
	'check2' => 'e116',
	'cross2' => 'e117',
	'users2' => 'e00a',
	'user' => 'e00b',
	'trophy' => 'e00c',
	'speedometer' => 'e00d',
	'screen-tablet' => 'e00f',
	'screen-smartphone' => 'e01a',
	'screen-desktop' => 'e01b',
	'plane' => 'e01c',
	'notebook' => 'e01d',
	'magic-wand' => 'e01e',
	'hourglass2' => 'e01f',
	'graduation' => 'e02a',
	'fire' => 'e02b',
	'eyeglass' => 'e02c',
	'energy' => 'e02d',
	'chemistry' => 'e02e',
	'bell' => 'e02f',
	'badge' => 'e03a',
	'speech' => 'e03b',
	'puzzle' => 'e03c',
	'printer' => 'e03d',
	'present' => 'e03e',
	'pin' => 'e03f',
	'picture2' => 'e04a',
	'map' => 'e04b',
	'layers' => 'e04c',
	'globe' => 'e04d',
	'globe2' => 'e04e',
	'folder' => 'e04f',
	'feed' => 'e05a',
	'drop' => 'e05b',
	'drawar' => 'e05c',
	'docs' => 'e05d',
	'directions' => 'e05e',
	'direction' => 'e05f',
	'cup2' => 'e06b',
	'compass' => 'e06c',
	'calculator' => 'e06d',
	'bubbles' => 'e06e',
	'briefcase' => 'e06f',
	'book-open' => 'e07a',
	'basket' => 'e07b',
	'bag' => 'e07c',
	'wrench' => 'e07f',
	'umbrella' => 'e08a',
	'tag' => 'e08c',
	'support' => 'e08d',
	'share' => 'e08e',
	'share2' => 'e08f',
	'rocket' => 'e09a',
	'question' => 'e09b',
	'pie-chart2' => 'e09c',
	'pencil2' => 'e09d',
	'note' => 'e09e',
	'music-tone-alt' => 'e09f',
	'list2' => 'e0a0',
	'like' => 'e0a1',
	'home2' => 'e0a2',
	'grid' => 'e0a3',
	'graph' => 'e0a4',
	'equalizer' => 'e0a5',
	'dislike' => 'e0a6',
	'calender' => 'e0a7',
	'bulb' => 'e0a8',
	'chart' => 'e0a9',
	'clock' => 'e0af',
	'envolope' => 'e0b1',
	'flag' => 'e0b3',
	'folder2' => 'e0b4',
	'heart2' => 'e0b5',
	'info' => 'e0b6',
	'link' => 'e0b7',
	'refresh' => 'e0bc',
	'reload' => 'e0bd',
	'settings' => 'e0be',
	'arrow-down' => 'e604',
	'arrow-left' => 'e605',
	'arrow-right' => 'e606',
	'arrow-up' => 'e607',
	'paypal' => 'e608',
	'home' => 'e800',
	'apartment' => 'e801',
	'data' => 'e80e',
	'cog' => 'e810',
	'star' => 'e814',
	'star-half' => 'e815',
	'star-empty' => 'e816',
	'paperclip' => 'e819',
	'eye2' => 'e81b',
	'license' => 'e822',
	'picture' => 'e827',
	'book' => 'e828',
	'bookmark' => 'e829',
	'users' => 'e82b',
	'store' => 'e82d',
	'calendar' => 'e836',
	'keyboard' => 'e837',
	'spell-check' => 'e838',
	'screen' => 'e839',
	'smartphone' => 'e83a',
	'tablet' => 'e83b',
	'laptop' => 'e83c',
	'laptop-phone' => 'e83d',
	'construction' => 'e841',
	'pie-chart' => 'e842',
	'gift' => 'e844',
	'diamond' => 'e845',
	'cup3' => 'e848',
	'leaf' => 'e849',
	'earth' => 'e853',
	'bullhorn' => 'e859',
	'hourglass' => 'e85f',
	'undo' => 'e860',
	'redo' => 'e861',
	'sync' => 'e862',
	'history' => 'e863',
	'download' => 'e865',
	'upload' => 'e866',
	'bug' => 'e869',
	'code' => 'e86a',
	'link2' => 'e86b',
	'unlink' => 'e86c',
	'thumbs-up' => 'e86d',
	'thumbs-down' => 'e86e',
	'magnifier' => 'e86f',
	'cross3' => 'e870',
	'menu' => 'e871',
	'list' => 'e872',
	'warning' => 'e87c',
	'question-circle' => 'e87d',
	'check' => 'e87f',
	'cross' => 'e880',
	'plus' => 'e881',
	'minus' => 'e882',
	'layers2' => 'e88e',
	'text-format' => 'e890',
	'text-size' => 'e892',
	'hand' => 'e8a5',
	'pointer-up' => 'e8a6',
	'pointer-right' => 'e8a7',
	'pointer-down' => 'e8a8',
	'pointer-left' => 'e8a9',
	'heart' => 'e930',
	'cloud' => 'e931',
	'trash' => 'e933',
	'user2' => 'e934',
	'key' => 'e935',
	'search' => 'e936',
	'settings2' => 'e937',
	'camera' => 'e938',
	'tag2' => 'e939',
	'bulb2' => 'e93a',
	'pencil' => 'e93b',
	'diamond2' => 'e93c',
	'location' => 'e93e',
	'eye' => 'e93f',
	'bubble' => 'e940',
	'stack' => 'e941',
	'cup' => 'e942',
	'phone' => 'e943',
	'news' => 'e944',
	'mail' => 'e945',
	'news2' => 'e948',
	'paperplane' => 'e949',
	'params2' => 'e94a',
	'data2' => 'e94b',
	'megaphone' => 'e94c',
	'study' => 'e94d',
	'chemistry2' => 'e94e',
	'fire2' => 'e94f',
	'paperclip2' => 'e950',
	'calendar2' => 'e951',
	'wallet' => 'e952',
	),

/*** ajax load more identifiers ***/
'theme_identifiers' => array(
	'load_more_optid' 			=> 'fluida_lpposts_more',
	'content_css_selector' 		=> '#lp-posts .lp-posts-inside',
	'pagination_css_selector' 	=>  '#lp-posts nav.navigation',
),

/************* widget areas *************/

'widget-areas' => array(
	'widget-area-left' => array(
		'name' => __( 'Sidebar Left', 'fluida' ),
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title"><span>',
		'after_title' => '</span></h2>',
	),
	'widget-area-right' => array(
		'name' => __( 'Sidebar Right', 'fluida' ),
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title"><span>',
		'after_title' => '</span></h2>',
	),
	'footer-widget-area' => array(
		'name' => __( 'Footer', 'fluida' ),
		'description' 	=> __('You can select how many widgets to show per row from Graphics &raquo; Layout.', 'fluida'),
		'before_widget' => '<section id="%1$s" class="widget-container %2$s"><div class="footer-widget-inside">',
		'after_widget' => '</div></section>',
		'before_title' => '<h2 class="widget-title"><span>',
		'after_title' => '</span></h2>',
	),
	'content-widget-area-before' => array(
		'name' => __( 'Content Before', 'fluida' ),
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title"><span>',
		'after_title' => '</span></h2>',
	),
	'content-widget-area-after' => array(
		'name' => __( 'Content After', 'fluida' ),
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title"><span>',
		'after_title' => '</span></h2>',
	),
	'widget-area-header' => array(
		'name' => __( 'Header', 'fluida' ),
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title"><span>',
		'after_title' => '</span></h2>',
	),
), // widget-areas


); // $fluida_big

// FIN
