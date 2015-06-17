<?php /* Smarty version Smarty-3.1.16, created on 2015-02-22 16:46:10
         compiled from "C:\xampp\htdocs\tpl\Reports\print-custom-report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1554154e9f9c2d7f1e5-87824031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35e569761796818c97073cdb71657b5c7f72730' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpl\\Reports\\print-custom-report.tpl',
      1 => 1420035436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1554154e9f9c2d7f1e5-87824031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HtmlLang' => 0,
    'HtmlTextDirection' => 0,
    'TitleKey' => 0,
    'TitleArgs' => 0,
    'Title' => 0,
    'Charset' => 0,
    'Definition' => 0,
    'column' => 0,
    'Report' => 0,
    'row' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54e9f9c2e32d00_68916429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9f9c2e32d00_68916429')) {function content_54e9f9c2e32d00_68916429($_smarty_tpl) {?>
<!DOCTYPE HTML>
<html lang="<?php echo $_smarty_tpl->tpl_vars['HtmlLang']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['HtmlTextDirection']->value;?>
">
<head>
	<title><?php if ($_smarty_tpl->tpl_vars['TitleKey']->value!='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['TitleKey']->value,'args'=>$_smarty_tpl->tpl_vars['TitleArgs']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<?php }?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"/>
</head>
<body>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Created'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>Date::Now(),'key'=>'general_datetime'),$_smarty_tpl);?>

<table width="100%" border="1">
	<tr>
		<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Definition']->value->GetColumnHeaders(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
			<th><?php if ($_smarty_tpl->tpl_vars['column']->value->HasTitle()) {?>
					<?php echo $_smarty_tpl->tpl_vars['column']->value->Title();?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['column']->value->TitleKey()),$_smarty_tpl);?>

				<?php }?>
			</th>
		<?php } ?>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Report']->value->GetData()->Rows(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Definition']->value->GetRow($_smarty_tpl->tpl_vars['row']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</td>
			<?php } ?>
		</tr>
	<?php } ?>
</table>
<?php echo $_smarty_tpl->tpl_vars['Report']->value->ResultCount();?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rows'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['Definition']->value->GetTotal()!='') {?>
	| <?php echo $_smarty_tpl->tpl_vars['Definition']->value->GetTotal();?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Total'),$_smarty_tpl);?>

<?php }?>

<script type="text/javascript" >
	window.print();
</script>

</body>
</html><?php }} ?>
