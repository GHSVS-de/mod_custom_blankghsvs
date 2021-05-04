<?php
defined('_JEXEC') or die;

if ($params->get('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_custom_blankghsvs.content');
}
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
require JModuleHelper::getLayoutPath('mod_custom_blankghsvs', $params->get('layout', 'default'));
