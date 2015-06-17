<?php /* Smarty version Smarty-3.1.16, created on 2015-04-03 12:41:20
         compiled from "/var/www/html/tpl/Admin/manage_quotas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50947797551e6e50686614-36231323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec4364c8f343aaaccdfaa46ccce29abe0bd0878e' => 
    array (
      0 => '/var/www/html/tpl/Admin/manage_quotas.tpl',
      1 => 1428057622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50947797551e6e50686614-36231323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Quotas' => 0,
    'quota' => 0,
    'rowCss' => 0,
    'Schedules' => 0,
    'schedule' => 0,
    'Resources' => 0,
    'resource' => 0,
    'Groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_551e6e508d1fe2_00773195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e6e508d1fe2_00773195')) {function content_551e6e508d1fe2_00773195($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/lib/Common/../../lib/external/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/admin.css'), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageQuotas'),$_smarty_tpl);?>
</h1>

<div class="admin">
	<div class="title">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllQuotas'),$_smarty_tpl);?>

	</div>
	<div class="list" id="quotaList">
		<?php  $_smarty_tpl->tpl_vars['quota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Quotas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quota']->key => $_smarty_tpl->tpl_vars['quota']->value) {
$_smarty_tpl->tpl_vars['quota']->_loop = true;
?>
			<?php $_smarty_tpl->_capture_stack[0][] = array("scheduleName", "scheduleName", null); ob_start(); ?>
				<h4><?php if ($_smarty_tpl->tpl_vars['quota']->value->ScheduleName!='') {?>
					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->ScheduleName,',',' ');?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllSchedules"),$_smarty_tpl);?>

				<?php }?>
				</h4>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array("resourceName", "resourceName", null); ob_start(); ?>
				<h4><?php if ($_smarty_tpl->tpl_vars['quota']->value->ResourceName!='') {?>
					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->ResourceName,',',' ');?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllResources"),$_smarty_tpl);?>

				<?php }?>
				</h4>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array("groupName", "groupName", null); ob_start(); ?>
				<h4>
				<?php if ($_smarty_tpl->tpl_vars['quota']->value->GroupName!='') {?>
					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->GroupName,',',' ');?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllGroups"),$_smarty_tpl);?>

				<?php }?>
				</h4>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array("amount", "amount", null); ob_start(); ?>
				<h4><?php echo $_smarty_tpl->tpl_vars['quota']->value->Limit;?>
</h4>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array("unit", "unit", null); ob_start(); ?>
				<h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['quota']->value->Unit),$_smarty_tpl);?>
</h4>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array("duration", "duration", null); ob_start(); ?>
				<h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['quota']->value->Duration),$_smarty_tpl);?>
</h4>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>


			<div class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
				<a href="#" quotaId="<?php echo $_smarty_tpl->tpl_vars['quota']->value->Id;?>
" class="delete"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaConfiguration','args'=>((string)$_smarty_tpl->tpl_vars['scheduleName']->value).",".((string)$_smarty_tpl->tpl_vars['resourceName']->value).",".((string)$_smarty_tpl->tpl_vars['groupName']->value).",".((string)$_smarty_tpl->tpl_vars['amount']->value).",".((string)$_smarty_tpl->tpl_vars['unit']->value).",".((string)$_smarty_tpl->tpl_vars['duration']->value)),$_smarty_tpl);?>

			</div>
		<?php }
if (!$_smarty_tpl->tpl_vars['quota']->_loop) {
?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>

		<?php } ?>
	</div>
</div>

<div class="admin" style="margin-top:30px">
	<div class="title">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddQuota'),$_smarty_tpl);?>

	</div>
	<div>
		<form id="addQuotaForm" method="post">
		<?php $_smarty_tpl->_capture_stack[0][] = array("schedules", "schedules", null); ob_start(); ?>
			<select class='textbox' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
>
				<option selected='selected' value=''><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['schedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->key => $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->_loop = true;
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['schedule']->value->GetName(),',',' ');?>
</option>
			<?php } ?>
			</select>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array("resources", "resources", null); ob_start(); ?>
			<select class='textbox' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
>
				<option selected='selected' value=''><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['resource']->value->GetName(),',',' ');?>
</option>
			<?php } ?>
			</select>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array("groups", "groups", null); ob_start(); ?>
			<select class='textbox' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP'),$_smarty_tpl);?>
>
				<option selected='selected' value=''><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllGroups'),$_smarty_tpl);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value->Name,',',' ');?>
</option>
			<?php } ?>
			</select>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array("amount", "amount", null); ob_start(); ?>
			<input type='text' class='textbox' value='0' size='5' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LIMIT'),$_smarty_tpl);?>
 />
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array("unit", "unit", null); ob_start(); ?>
			<select class='textbox' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'UNIT'),$_smarty_tpl);?>
>
				<option value='<?php echo QuotaUnit::Hours;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</option>
				<option value='<?php echo QuotaUnit::Reservations;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'reservations'),$_smarty_tpl);?>
</option>
			</select>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php $_smarty_tpl->_capture_stack[0][] = array("duration", "duration", null); ob_start(); ?>
			<select class='textbox' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DURATION'),$_smarty_tpl);?>
>
				<option value='<?php echo QuotaDuration::Day;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'day'),$_smarty_tpl);?>
</option>
				<option value='<?php echo QuotaDuration::Week;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'week'),$_smarty_tpl);?>
</option>
				<option value='<?php echo QuotaDuration::Month;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'month'),$_smarty_tpl);?>
</option>
			</select>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaConfiguration','args'=>((string)$_smarty_tpl->tpl_vars['schedules']->value).",".((string)$_smarty_tpl->tpl_vars['resources']->value).",".((string)$_smarty_tpl->tpl_vars['groups']->value).",".((string)$_smarty_tpl->tpl_vars['amount']->value).",".((string)$_smarty_tpl->tpl_vars['unit']->value).",".((string)$_smarty_tpl->tpl_vars['duration']->value)),$_smarty_tpl);?>


		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"plus-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Add"),$_smarty_tpl);?>
</button>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif",'class'=>"indicator",'style'=>"display:none;"),$_smarty_tpl);?>

		</form>
	</div>
	<div class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaReminder'),$_smarty_tpl);?>
</div>
</div>

<div id="deleteDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
">
	<form id="deleteQuotaForm" method="post">
		<div class="error" style="margin-bottom: 25px;">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</h3>
		</div>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/edit.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/quota.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>


<script type="text/javascript">
	$(document).ready(function() {

	var actions = {
		addQuota: '<?php echo ManageQuotasActions::AddQuota;?>
',
		deleteQuota: '<?php echo ManageQuotasActions::DeleteQuota;?>
'
	};

	var quotaOptions = {
		submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
		saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
		actions: actions
	};

	var quotaManagement = new QuotaManagement(quotaOptions);
	quotaManagement.init();
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
