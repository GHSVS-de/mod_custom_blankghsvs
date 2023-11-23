<?php
defined('_JEXEC') or die;
/*
From Dispatcher:
$module   Object,
$app,
$input,
$params Registry,
$template,
$modId String,
$moduleclass_sfx String,
$module->title Lang strings translated,
*/
?>
<div id="<?php echo $modId; ?>" class="<?php echo $module->module; ?> <?php echo $moduleclass_sfx; ?>">
<?php echo $module->content; ?>
</div>
