<?php /* Smarty version Smarty-3.1.16, created on 2015-04-03 21:26:17
         compiled from "/var/www/html/tpl/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316951198551ee9595fb1e1-86019639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '836daa3a97b278043caca618372fa95efa63e1c4' => 
    array (
      0 => '/var/www/html/tpl/error.tpl',
      1 => 1428057618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316951198551ee9595fb1e1-86019639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorMessage' => 0,
    'ReturnUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_551ee959679bc2_67275062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551ee959679bc2_67275062')) {function content_551ee959679bc2_67275062($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="error">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['ErrorMessage']->value),$_smarty_tpl);?>
</h3>
    <h5><a href="<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReturnToPreviousPage'),$_smarty_tpl);?>
</a></h5>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
