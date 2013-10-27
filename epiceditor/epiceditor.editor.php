<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=editor
[END_COT_EXT]
==================== */

global $lang;

$epic_lang = $cfg['plugins_dir'] . "/epiceditor/js/lang/$lang.lang.js";
if (!file_exists($epic_lang))
{
    $epic_lang = $cfg['plugins_dir'] . '/epiceditor/js/lang/en.lang.js';
}

cot_rc_link_footer($epic_lang);
cot_rc_link_footer($cfg['plugins_dir'] . '/epiceditor/lib/js/epiceditor.min.js');
cot_rc_link_footer($cfg['plugins_dir'] . '/epiceditor/js/js.js');