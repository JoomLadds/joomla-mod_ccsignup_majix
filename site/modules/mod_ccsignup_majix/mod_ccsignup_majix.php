<?php
/*------------------------------------------------------------------------
# mod_ccsignup_majix
# ------------------------------------------------------------------------
# author    JoomLadds / River Media
# copyright Copyright (C) 2015 JoomLadds All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomladds.com
# Technical Support:  Forum - http://www.joomladds.com/forum.html
-------------------------------------------------------------------------*/
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
#require_once( dirname(__FILE__).DS.'helper.php' );

$ccid				= $params->get( 'ccid' );
$mod_desc			= $params->get( 'mod_desc' );
$mod_desc_style 	= $params->get( 'mod_desc_style', 'p');
$mod_desc_align 	= $params->get( 'mod_desc_align', 'center');
$email_label		= $params->get( 'email_label','Email Address:');
$email_field_text	= $params->get( 'email_field_text','Email Address');
$css_field_width	= (int) $params->get( 'css_field_width',0);
$email_label_width			= (int) $params->get( 'email_label_width',180);
$label_fontcolor	= $params->get( 'label_fontcolor','#000000');
$label_fontweight	= $params->get( 'label_fontweight','normal');
$label_fontsize		= $params->get( 'label_fontsize','12px');
$label_fontfamily	= $params->get( 'label_fontfamily','Arial, Helvetica, sans-serif');
$show_mod_desc		= $params->get( 'show_mod_desc', 0);
$show_field_label	= $params->get( 'show_field_label', 1);
$show_label_text	= $params->get( 'show_label_text', 1);
$submit_btn			= $params->get( 'submit_btn', 'Join');
$submit_btn_place	= $params->get( 'submit_btn_place', 'left');
$show_safesubscribe = $params->get( 'show_safesubscribe', 1);
$show_newsletters	= $params->get( 'show_newsletters', 1);
$referralLink		= $params->get( 'referralLink', 1);
$confirm_status		= $params->get( 'confirm_status',0);
$confirm_field		= $params->get( 'confirm_field','');

        $googleFonts['Arial, sans-serif'] = '--------Web Safe Fonts--------';
        $googleFonts['Arial, Helvetica, sans-serif'] = 'Arial';
		$googleFonts['Courier, monospace'] = 'Courier';
		$googleFonts['Garamond, serif'] = 'Garamond';
		$googleFonts['Georgia, serif'] = 'Georgia';
		$googleFonts['Impact, Charcoal, sans-serif'] = 'Impact';
		$googleFonts['Lucida Console, Monaco, monospace'] = 'Lucida Console';
		$googleFonts['Lucida Sans Unicode, Lucida Grande, sans-serif'] = 'Lucida Sans Unicode';
		$googleFonts['MS Sans Serif, Geneva, sans-serif'] = 'MS Sans Serif';
		$googleFonts['MS Serif, New York, sans-serif'] = 'MS Serif';
		$googleFonts['Palatino Linotype, Book Antiqua, Palatino, serif'] = 'Palatino Linotype';
		$googleFonts['Tahoma, Geneva, sans-serif'] = 'Tahoma';
		$googleFonts['Times New Roman, Times, serif'] = 'Times New Roman';
		$googleFonts['Trebuchet MS, Helvetica, sans-serif'] = 'Trebuchet MS';
		$googleFonts['Verdana, Geneva, sans-serif'] = 'Verdana';
		$googleFonts['Arial'] = '----------Google Fonts----------';

require JModuleHelper::getLayoutPath( 'mod_ccsignup_majix', $params->get('layout', 'default') );
