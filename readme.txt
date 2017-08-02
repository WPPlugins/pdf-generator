=== PDF-Generator ===
Contributors: maartenhemmes
Donate link: http://www.hemmes.it
Tags: pdf, generator
Requires at least: 3.4
Tested up to: 3.4
Stable tag: 0.2.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin to create PDF files
 
 == Description ==
 
 
 
 == Installation ==

1. Download 'pdf-generator'.
2. Upload the 'pdf-generator' directory to your '/wp-content/plugins/' directory, using your favorite method (ftp, sftp, scp, etc...)
3. Activate 'pdf-generator' from your Plugins page.
4. Initiate and use the plugin in your code by writing :

	4.1. $mode = 'utf-8'; 
	4.2. $size = array(212.72500, 276.22500);
	4.3. $html = '<div>';
	4.4. $css = site_url().'/wp-content/plugins/directorypress-extend-listings/includes/pdf-generation/sample-css.css';
		 $css = file_get_contents($css); 
	4.5. $footer = '<div>footer</div>';
	
	4.6. pdf_generation($css, mode, $size, $html, $footer);
	
5. Have fun! Send an email to info@hemmes.it or visit http://www.hemmes.it/wordpress-pdf-generator/ if you have any questions related to this project.

== Frequently Asked Questions ==

 = Please explain this stage 
4. Initiate and use the plugin in your code by writing :

	4.1. $mode = 'utf-8'; 
	4.2. $size = array(212.72500, 276.22500);
	4.3. $html = '<div>';
	4.4. $footer = '<div>footer</div>';
	4.5. pdf_generation($mode, $size, $html, $footer); =
	
You have to run this (without the 4.1. etc.) to generate the PDF. Make sure you include the function pdf_generation.
Your $html is the variable where you store the content of the PDF, it's now, as an example, '<div>', you need to change that and add your own content. Same goes for the $footer.
	

== Screenshots ==

More to come


== Changelog ==

= 0.2 =
11/11/2013

- Added MDF5.7 class
- Added function to create directory structure to upload PDF
- Changed PDF name to result.pdf

= 0.2.2 =
04/12/2013

- Added support for CSS

= 0.2.4 =
04/12/2013

- Added feature to delete (old) PDF before generating a new one
- Small fixes

= 0.2.5. =
04/12/2013

- Fixed footer bug (needed to print footer before html-content)

= 0.2.6. =
08/12/2013

- Added settings for tmp-folders

== Upgrade Notice ==

More to come
