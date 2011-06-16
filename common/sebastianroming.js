/**
 * Thank you for viewing my sourcecode.
 * 
 * @author Sebastian Roming
 */

if ( typeof(google) != 'undefined' ) {

	google.load('jquery', '1.5.0');
	
	google.setOnLoadCallback(function() {
	
		jQuery(document).ready(function() {
			
			jQuery('#showContact').click(function() {
				jQuery('#contact').slideToggle();
			});
			
			jQuery('#submitContactForm').click(function() {
				jQuery('#contact-label-name').addClass('contact-container-errorLabel');
			});
			
		});
		
	});
	
}

