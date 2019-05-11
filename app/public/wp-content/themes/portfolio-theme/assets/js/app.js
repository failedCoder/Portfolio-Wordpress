jQuery(document).ready(function($){

	// change mail icon from follow to simple mail:to
	jQuery('#sfsiid_email').removeAttr("href");
	jQuery('#sfsiid_email').removeAttr("target");
	// jQuery('#sfsiid_email').attr("target","_self");
	var email = "mailto:pcoric1@outlook.com";
	jQuery('#sfsiid_email').prop("href", email);
});


