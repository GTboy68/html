<?php /* Smarty version Smarty-3.1.16, created on 2015-04-03 12:47:49
         compiled from "/var/www/html/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1186723765551e6fd5373976-50639969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dfa0949b5c2e323d2ca16e27815e2dee3a8bf6d' => 
    array (
      0 => '/var/www/html/tpl/json_data.tpl',
      1 => 1428057618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1186723765551e6fd5373976-50639969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_551e6fd54082c9_22123753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e6fd54082c9_22123753')) {function content_551e6fd54082c9_22123753($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
