/**
 * Admin-side JS
 *
 * @package Fluida
 */

jQuery(document).ready(function() {

	/* Theme settings save */
	jQuery('#fluida-savesettings-button').on('click', function(e) {
		jQuery( "#fluida-settings-dialog" ).dialog({
		  modal: true,
		  minWidth: 600,
		  buttons: {
			'Close': function() {
			  jQuery( this ).dialog( "close" );
			}
		  }
		});
		jQuery('#fluida-themesettings-textarea').val(jQuery('#fluida-export input#fluida-themesettings').val());
		jQuery('#fluida-settings-dialog strong').hide();
		jQuery('#fluida-settings-dialog div.settings-error').remove();
		jQuery('#fluida-settings-dialog strong:nth-child(1)').show();
	});

	/* Theme settings load */
	jQuery('#fluida-loadsettings-button').on('click', function(e) {
		jQuery( "#fluida-settings-dialog" ).dialog({
			modal: true,
			minWidth: 600,
			buttons: {
				'Load Settings': function() {
					theme_settings = encodeURIComponent(jQuery('#fluida-themesettings-textarea').val());
					nonce = jQuery('#fluida-settings-nonce').val();
					jQuery.post(ajaxurl, {
						action: 'cryout_loadsettings_action',
						fluida_settings_nonce: nonce,
						fluida_settings: theme_settings,
					}, function(response) {
						if (response=='OK') {
							jQuery('#fluida-settings-dialog div.settings-error').remove();
							window.location = '?page=about-fluida-theme&settings-loaded=true';
						} else {
							jQuery('#fluida-settings-dialog div.settings-error').remove();
							jQuery('#fluida-themesettings-textarea').after('<div class="settings-error">' + response + '</div>');
						}
					})
				}
			}
		});
		jQuery('#fluida-themesettings-textarea').val('');
		jQuery('#fluida-settings-dialog strong').hide();
		jQuery('#fluida-settings-dialog strong:nth-child(2)').show();
	});

	/* Latest News Content */
    var data = {
        action: 'cryout_feed_action',
    };
	jQuery.post(ajaxurl, data, function(response) {
		jQuery("#fluida-news .inside").html(response);
    });

	/* Confirm modal window on reset to defaults */
	jQuery('#fluida_reset_defaults').click (function() {
		if (!confirm(reset_confirmation)) { return false;}
	});

});/* document.ready */

/* FIN */
