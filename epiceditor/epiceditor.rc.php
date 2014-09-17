<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

$parser = ! empty($sys['parser']) ? $sys['parser'] : $cfg['parser'];
$editor = $cfg['plugin'][$parser]['editor'];
if ($editor == 'epiceditor')
{
	$R['input_textarea_editor'] = '<div id="epiceditor"></div><textarea id="epic" class="editor" name="{$name}" rows="{$rows}" cols="{$cols}"{$attrs} style="display: none!important;">{$value}</textarea>{$error}';
	$R['input_textarea_medieditor'] = '<div id="epiceditor"></div><textarea id="epic" class="medieditor" name="{$name}" rows="{$rows}" cols="{$cols}"{$attrs} style="display: none!important;">{$value}</textarea>{$error}';
	$R['input_textarea_minieditor'] = '<div id="epiceditor"></div><textarea id="epic" class="minieditor" name="{$name}" rows="{$rows}" cols="{$cols}"{$attrs} style="display: none!important;">{$value}</textarea>{$error}';
}