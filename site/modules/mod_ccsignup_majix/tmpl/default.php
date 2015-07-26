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

defined( '_JEXEC' ) or die( 'Restricted access' );

$referralLink_ = $referralLink ? '?pn=rivermedia' : '';

$document = JFactory::getDocument();
$style = '.jform-lbl-style {
	color: ' . $label_fontcolor . ';
	font-size: ' . $label_fontsize . ';
	font-family: ' . $label_fontfamily . ';
	font-weight: '.$label_fontweight.';
	width: '.$email_label_width.'px !important;
}
.jform_button {
	float: '.$submit_btn_place.';
}
.mod_text {
	text-align: '.$mod_desc_align.';
}
.ccmajix-spacer{
	height: 2px;
	width: 100%;
	clear: both;
}

.ccmajix-checkbox{
	margin-right:4px !important;
	float:left;
}

.ccmajix-checkbox-container{
	margin-left:auto;
	margin-right:auto;
	float:left;
}

.ccmajix-checkbox-label{
	font-family: ' . $label_fontfamily . ';
	font-size: ' . $label_fontsize . '; 
	font-weight: normal;
	color: ' . $label_fontcolor . ';  
	width: '.$email_label_width.'px !important;
	margin-bottom: 0px;
	vertical-align: middle;
	padding-left: 5px;
}
';
if($css_field_width>0){
	$style.='.forced-width {
	width: '.$css_field_width.'px !important;
}';
}
$document->addStyleDeclaration( $style );
if(!array_key_exists($label_fontfamily, $googleFonts)){
	$stylelink = '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$label_fontfamily.'">';
	$document->addCustomTag($stylelink);
}

if($ccid== '#############' || $ccid==''){
	echo '<h4 style="color: red">ERROR: Please enter a valid Constant Contact ID</h4>
	<p>FORM DISABLED</p>';
}else{
?>
<form name="ccoptin" id="login-form" action="http://visitor.constantcontact.com/d.jsp" method="post" target="_blank">
<?php
if($show_mod_desc)
	echo '<'.$mod_desc_style.' class="mod_text">'.$mod_desc.'</'.$mod_desc_style.'>';
?>
<fieldset class="cc_data">
<?php if($show_label_text) : ?>

<label id="jform_email-lbl" class="validate-email required jform-lbl-style" title="" for="jform_email" aria-invalid="false">

<?php echo JText::_($email_label); ?>
</label>

<?php endif; ?>

	<input id="jform_email" class="validate-email required inputbox <?php if($css_field_width>0) echo ' forced-width' ?>" type="email" size="50" value="<?php echo JText::_($email_field_text) ?>" onfocus="javascript:if(this.value=='<?php echo JText::_($email_field_text) ?>'){this.value='';}" name="ea" aria-required="true" required="required" />
<?php
if($confirm_status)
{
	echo '<div class="ccmajix-checkbox-container">';
	echo '<input id="jform_confirm_status" class="ccmajix-checkbox" type="checkbox" name="confirm_status" aria-required="true" required="required" /> ';
	echo '<div class="ccmajix-checkbox-label">';
#	echo '<span class="ccmajix-text-inline">'.JText::_($confirm_field) .'</span>';
	echo JText::_($confirm_field);
	echo '</div>';
	echo '</div>';
	echo '<div class="ccmajix-spacer"></div>';
}
?>

	<input type="submit" name="<?php echo $submit_btn; ?>" value="<?php echo $submit_btn; ?>" class="button jform_button" />
</fieldset>
	<input type="hidden" name="m" value="<?php echo $ccid; ?>" />
	<input type="hidden" name="p" value="oi" />
</form>
<?php
if($show_safesubscribe){
?>
<!-- BEGIN: SafeSubscribe -->
<div align="center" style="padding-top:5px;">
<a href="http://www.constantcontact.com/safesubscribe.jsp<?php echo $referralLink_ ?>" target="_blank"><img src="http://img.constantcontact.com/ui/images1/safe_subscribe_logo.gif" border="0" width="168" height="14" alt=""/></a>
</div>
<!-- END: SafeSubscribe -->
<?php
}
if($show_newsletters){

?>
<!-- BEGIN: Email Marketing you can trust -->
<div align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#999999;">
For <a href="http://www.constantcontact.com/jmml/email-newsletter.jsp<?php echo $referralLink_ ?>" style="text-decoration:none;font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#999999;" target="_blank">Email Newsletters</a> you can trust
</div>
<!-- END: Email Newsletters you can trust -->
<?php
}

}
?>