<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Plugin\PluginHelper;

if ($params->def('prepare_content', 1))
{
	PluginHelper::importPlugin('content');
	$module->content = HTMLHelper::_('content.prepare', $module->content, '',
		'mod_custom_blankghsvs.content');
}

$moduleclass_sfx = htmlspecialchars(
	$params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
require ModuleHelper::getLayoutPath('mod_custom_blankghsvs',
	$params->get('layout', 'default'));
