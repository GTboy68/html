<?php /* Smarty version Smarty-3.1.16, created on 2015-04-27 14:29:39
         compiled from "/var/www/html/tpl/Admin/server_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1298064827553e2bb314c1c0-62072339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18ff15d6ecf8d64010ffa81db4ed69f03a46f29' => 
    array (
      0 => '/var/www/html/tpl/Admin/server_settings.tpl',
      1 => 1428057622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298064827553e2bb314c1c0-62072339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentTime' => 0,
    'imageUploadDirectory' => 0,
    'imageUploadDirPermissions' => 0,
    'tempalteCacheDirectory' => 0,
    'plugins' => 0,
    'category' => 0,
    'items' => 0,
    'pluginName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_553e2bb32612f4_72813069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e2bb32612f4_72813069')) {function content_553e2bb32612f4_72813069($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ServerSettings'),$_smarty_tpl);?>
</h1>

<ul class="indented">
	<li>Current Time: <?php echo $_smarty_tpl->tpl_vars['currentTime']->value;?>
</li>
	<li>Image Upload Physical Directory: <?php echo $_smarty_tpl->tpl_vars['imageUploadDirectory']->value;?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Permissions'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['imageUploadDirPermissions']->value;?>
) <a href="<?php echo $_SERVER['SCRIPT_URL'];?>
?<?php echo QueryStringKeys::ACTION;?>
=changePermissions">Try to apply correct permissions</a></li>
	<li>Template Cache Directory: <?php echo $_smarty_tpl->tpl_vars['tempalteCacheDirectory']->value;?>
 <a href="<?php echo $_SERVER['SCRIPT_URL'];?>
?<?php echo QueryStringKeys::ACTION;?>
=flush">Try to flush cached files</a></li>
</ul>

<h3 style="margin-top: 20px;">Plugins</h3>
<ul class="indented">
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['category']->value;?>

		<ul>
		<?php  $_smarty_tpl->tpl_vars['pluginName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pluginName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pluginName']->key => $_smarty_tpl->tpl_vars['pluginName']->value) {
$_smarty_tpl->tpl_vars['pluginName']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['pluginName']->value;?>
</li>
		<?php } ?>
		</ul>
	</li>
<?php } ?>
</ul>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
