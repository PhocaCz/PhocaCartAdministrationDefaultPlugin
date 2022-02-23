<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
jimport( 'joomla.plugin.plugin' );
jimport( 'joomla.filesystem.file');
jimport( 'joomla.html.parameter' );


JLoader::registerPrefix('Phocacart', JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/phocacart');

class plgPCADefault extends JPlugin
{
	function __construct(& $subject, $config) {
		parent :: __construct($subject, $config);
		$this->loadLanguage();
	}

	public function onPCAonItemBeforeSave($context, &$table, $isNew, $data) {

	}

	public function onPCAonItemAfterSave($context, &$table, $isNew, $data) {

	}

	public function onPCAonCategoryBeforeSave($context, &$table, $isNew, $data) {

	}

	public function onPCAonCategoryAfterSave($context, &$table, $isNew, $data) {

	}
}
?>
