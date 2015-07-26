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

class JFormFieldInfoBox extends JFormField
{
	public $type = 'InfoBox';
	public function getInput(){
		// Output		
		return '
		
		<div class="infoBox">
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