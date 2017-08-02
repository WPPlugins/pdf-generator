<?php
/*
Plugin Name: PDF Generator
Plugin URI: http://www.hemmes.it/wordpress-pdf-generator/
Description: Plugin to create PDF files
Version: 0.2.6
Author: Maarten Hemmes - Hemmes.IT
Author URI: http://www.hemmes.it
License: A "Slug" license name e.g. GPL2
*/

//TODO: catch errors


#INIT
$dir_name = WP_CONTENT_DIR.'/uploads/pdf-generator/pdffile';
$fonts_tmp = $dir_name = WP_CONTENT_DIR.'/uploads/pdf-generator/tmp_fonts';
$tmp = WP_CONTENT_DIR.'/uploads/pdf-generator/tmp';

//INIT DIRECTORY FOR UPLOADING PDF
if ( ! is_dir($dir_name) )
		{	
			wp_mkdir_p($dir_name) or die("Could not create directory " . $dir_name);
		}
		
//SET TEMP FOLDERS
define("_MPDF_TEMP_PATH", WP_CONTENT_DIR.'/uploads/pdf-generator/tmp/');
define("_MPDF_TTFONTDATAPATH", WP_CONTENT_DIR.'/uploads/pdf-generator/tmp_fonts/');


//INIT DIRECTORY FOR TEMP-FILES
	if ( ! is_dir($tmp) )
	{
		wp_mkdir_p($tmp) or die("Could not create directory " . $tmp);
	}

//INIT DIRECTORY FOR TEMP-FONTS
if ( ! is_dir($fonts_tmp) )
	{
		wp_mkdir_p($fonts_tmp) or die("Could not create directory " . $fonts_tmp);
	}


//PDF Library function directory
require WP_PLUGIN_DIR.'/'.plugin_basename('/pdf-generator/MPDF/mpdf.php');

function pdf_generation($css, $mode, $size, $html, $footer)
	{   
		$pdf_name = WP_CONTENT_DIR.'/uploads/pdf-generator/pdffile/results.pdf';
		
		//RESET OLD FILES
		if (is_file($pdf_name))
			{
				unlink($pdf_name);
			}
	
		$mpdf = new mPDF($mode, $size, 0, '', 0, 0, 0, 0, 0, 0, 'P');
		
		$mpdf->WriteHTML($css,1);
		$mpdf->SetHTMLFooter($footer);
		
		$mpdf->WriteHTML($html,2);
		
	    
	    $mpdf->Output($pdf_name,'F');
	    exit;	
	}


function pdf_generation_func($atts)
	{
		$pdf_name = WP_CONTENT_DIR.'/uploads/pdf-generator/pdffile/results.pdf';
		
		//RESET OLD FILES
		if (is_file($pdf_name))
			{
				unlink($pdf_name);
			}
		
	    $content=$atts['content']; 
	    $mpdf = new mPDF();
	    $mpdf->WriteHTML($content);
	    $mpdf->Output($pdf_name,'F');
	    exit;	
	}
add_shortcode('pdf_generation','pdf_generation_func');
?>