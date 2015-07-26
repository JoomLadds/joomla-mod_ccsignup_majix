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

defined('JPATH_BASE') or die();

/**
 * Renders a text element
 *
 * @package 	Joomla.Framework
 * @subpackage		Parameter
 * @since		1.5
 */

class JFormFieldTitleBox extends JFormField
{
	public $type = 'TitleBox';
	public function getInput(){
		// Output		
		return '
		
		<div class="titleBox">
			<div class="info">
				'.JText::_($this->value).'
			</div>
		</div>';
	}

	public function getLabel() {
		return false;
	}
}

?>