<?php /* Smarty version Smarty-3.1.16, created on 2015-04-03 12:49:59
         compiled from "/var/www/html/tpl/Ajax/reservation/delete_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187736578551e70575fab04-14172630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26777409f076a875283aa21d857aaf9a83706ed3' => 
    array (
      0 => '/var/www/html/tpl/Ajax/reservation/delete_successful.tpl',
      1 => 1428057628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187736578551e70575fab04-14172630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_551e705760db31_03858133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e705760db31_03858133')) {function content_551e705760db31_03858133($_smarty_tpl) {?>
<div>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRemoved'),$_smarty_tpl);?>
</div>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>
