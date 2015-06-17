<?php /* Smarty version Smarty-3.1.16, created on 2015-02-22 14:35:35
         compiled from "C:\xampp\htdocs\tpl\json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2274654e9db27ce63b4-08310265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01299cb442859b8fa50e7a84fae8e30d98a347f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpl\\json_data.tpl',
      1 => 1420035436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2274654e9db27ce63b4-08310265',
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
  'unifunc' => 'content_54e9db27d151c5_23049317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9db27d151c5_23049317')) {function content_54e9db27d151c5_23049317($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
