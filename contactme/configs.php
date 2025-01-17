<?php

error_reporting(E_ALL);

/* START - Required Config */
$configs['from_name']				= 'swiss skate Kontaktformular';								// Your name will be used in emails
$configs['from_address']			= 'noreply@swissskate.ch';							// Your email address used to send emails
$configs['to_addresses']			= array('elpre@rollhockey.ch','exwkoch@gmail.com');						// The addresse(s) where to send all the requests
/* END - Required Config */

/* START - Optional Configs */
$configs['lang_path']				= 'lang/de.json';								// Path to the language file
$configs['recaptcha_enabled']		= true;										// Is Google reCAPTCHA enabled
$configs['recaptcha_secret']		= '6LcghaQUAAAAAOMkuxjlZbvHmHx08KfdMUFPt20O';							// Google reCAPTCHA secret key
$configs['success_link']			= '';											// Link of a custom success page
$configs['curl_enabled']			= true;											// Set to false if your server has cURL disabled
// Generic email configs
$configs['email_to_owner']			= true;											// Send the email with informations to the site owner?
$configs['email_confirm']			= false;											// Send a confirm email to user?
$configs['email_confirm_html_copy']	= false;										// Add a HTML copy of the data to the confirm email?
$configs['cc_addresses']			= array();										// The cc addresse(s)
$configs['bcc_addresses']			= array();										// The bcc addresse(s)
$configs['user_ip_address']			= false;										// Do you want to add in the email the IP address of the user who filled in the Form?
// SMTP configs
$configs['smtp_enabled']			= false;										// Is the SMTP email sending enabled? (if not, PHP mail server will be used)
$configs['smtp_host']				= '';											// Ip of the SMTP host server
$configs['smtp_auth']				= true;											// Enable SMTP authentication?
$configs['smtp_username']			= '';											// SMTP username (only if the authentication is enabled)
$configs['smtp_password']			= '';											// SMTP password (only if the authentication is enabled)
$configs['smtp_secure']				= 'tls';										// Choose the encryption: 'tls' or 'ssl'
$configs['smtp_port']				= 587;											// TCP port
// Upload management
$configs['upload_dir']				= 'uploads/';									// Path to the upload directory
$configs['upload_limit']			= 10;											// Upload limit. You should leave the default 10MB
$configs['upload_keep_files']		= false;										// Do you want to keep files on the server after sending emails or not?
$configs['upload_types']			= array('jpeg',	'jpg', 'png', 'gif',			// Array of mime-types allowed for files
										'doc', 'docx', 'xls', 'xlsx',
										'pdf', 'txt', 'rtf', 'zip', 'rar'
									   );
/* END - Optional Configs */

?>