<?php /* Smarty version Smarty-3.1.16, created on 2015-06-16 23:18:16
         compiled from "/var/www/html/tpl/Reports/results-custom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120247405755809298f325a5-16101881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fd59db0fbd331fe4f4ce96c2b7a332c2b48a55d' => 
    array (
      0 => '/var/www/html/tpl/Reports/results-custom.tpl',
      1 => 1428057622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120247405755809298f325a5-16101881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Report' => 0,
    'HideSave' => 0,
    'Definition' => 0,
    'column' => 0,
    'rowCss' => 0,
    'row' => 0,
    'cell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_558092991aedd9_13631694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558092991aedd9_13631694')) {function content_558092991aedd9_13631694($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php if ($_smarty_tpl->tpl_vars['Report']->value->ResultCount()>0) {?>
	<div id="report-actions">
		<a href="#" id="btnChart"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"chart.png"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewAsChart'),$_smarty_tpl);?>
</a> <?php if (!$_smarty_tpl->tpl_vars['HideSave']->value) {?><a href="#"
																												id="btnSaveReportPrompt"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SaveThisReport'),$_smarty_tpl);?>
</a> | <?php }?>
		<a href="#" id="btnCsv"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table-export.png"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ExportToCSV'),$_smarty_tpl);?>
</a> | <a href="#"
																										id="btnPrint"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"printer.png"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Print'),$_smarty_tpl);?>
</a>
	</div>
	<table width="100%" id="report-results" chart-type="<?php echo $_smarty_tpl->tpl_vars['Definition']->value->GetChartType();?>
">
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
			<?php echo smarty_function_cycle(array('values'=>',alt','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
				<?php  $_smarty_tpl->tpl_vars['cell'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cell']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Definition']->value->GetRow($_smarty_tpl->tpl_vars['row']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cell']->key => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->_loop = true;
?>
					<td chart-value="<?php echo $_smarty_tpl->tpl_vars['cell']->value->ChartValue();?>
" chart-column-type="<?php echo $_smarty_tpl->tpl_vars['cell']->value->GetChartColumnType();?>
"
						chart-group="<?php echo $_smarty_tpl->tpl_vars['cell']->value->GetChartGroup();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</td>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>
	<h4><?php echo $_smarty_tpl->tpl_vars['Report']->value->ResultCount();?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rows'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['Definition']->value->GetTotal()!='') {?>
			| <?php echo $_smarty_tpl->tpl_vars['Definition']->value->GetTotal();?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Total'),$_smarty_tpl);?>

		<?php }?>
	</h4>
<?php } else { ?>
	<h2 id="report-no-data" class="no-data" style="text-align: center;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResultsFound'),$_smarty_tpl);?>
</h2>
<?php }?>

<script type="text/javascript">
	$(document).ready(function ()
	{
		$('#report-no-data, #report-results').trigger('loaded');
	});
</script><?php }} ?>
