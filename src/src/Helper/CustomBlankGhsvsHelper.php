<?php

namespace GHSVS\Module\CustomBlankGhsvs\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\Registry\Registry;
use Joomla\CMS\HTML\HTMLHelper;

class CustomBlankGhsvsHelper
{
	public function getDisplayData(Registry $params, Object $module): array
	{
		return [
			'moduleclass_sfx' => $this->getModuleclass_sfx($params),
			'module' => $this->prepareModule($params, $module),
			'modId' => 'modId-' . $module->id,
		];
	}

	private function getModuleclass_sfx(Registry $moduleParams) : string
	{
		return $this->clean($moduleParams->get('moduleclass_sfx', ''));
	}

	private function prepareModule(Registry $moduleParams, Object $module) : object
	{
		if ($moduleParams->get('prepare_content', 1) && !empty($module->content))
		{
			$module->content = HTMLHelper::_(
				'content.prepare',
				$module->content,
				'',
				'mod_custom_blankghsvs.content'
			);
		}

		$module->title = Text::_($module->title);
		return $module;
	}

	private function clean(String $string) : string
	{
		return empty($string) ? '' : htmlspecialchars(Text::_($string), ENT_QUOTES,
			'UTF-8');
	}
}
