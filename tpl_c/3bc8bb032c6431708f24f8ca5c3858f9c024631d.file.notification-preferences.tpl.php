<?php /* Smarty version Smarty-3.1.16, created on 2015-06-16 22:30:02
         compiled from "/var/www/html/tpl/notification-preferences.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13146326615580874a3677b8-73582655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bc8bb032c6431708f24f8ca5c3858f9c024631d' => 
    array (
      0 => '/var/www/html/tpl/notification-preferences.tpl',
      1 => 1428057618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13146326615580874a3677b8-73582655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PreferencesUpdated' => 0,
    'EmailEnabled' => 0,
    'Created' => 0,
    'Updated' => 0,
    'Deleted' => 0,
    'Approved' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5580874a462073_59039360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580874a462073_59039360')) {function content_5580874a462073_59039360($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['PreferencesUpdated']->value) {?>
<div class="success"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourSettingsWereUpdated'),$_smarty_tpl);?>
</div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['EmailEnabled']->value) {?>
<div class="error"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EmailDisabled'),$_smarty_tpl);?>
</div>
	<?php } else { ?>
<div id="notificationPreferences" class="box-form">
	<form class="box-form" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
		<div class="header">
			<h3 class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NotificationPreferences'),$_smarty_tpl);?>
</h3>
		</div>

		<div style="display: table;">
			<div class="notification-row">
				<div class="notification-type">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationCreatedPreference'),$_smarty_tpl);?>

				</div>
				<div class="notification-status">
					<input id="createdYes" type="radio" name="<?php echo ReservationEvent::Created;?>
" value="1"
						   <?php if ($_smarty_tpl->tpl_vars['Created']->value) {?>checked="checked"<?php }?>/><label
						for="createdYes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>
</label>
					<br/>
					<input id="createdNo" type="radio" name="<?php echo ReservationEvent::Created;?>
" value="0"
						   <?php if (!$_smarty_tpl->tpl_vars['Created']->value) {?>checked="checked"<?php }?>/><label
						for="createdNo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
				</div>
			</div>

			<div class="notification-row alt">
				<div class="notification-type">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationUpdatedPreference'),$_smarty_tpl);?>

				</div>
				<div class="notification-status">
					<input id="updatedYes" type="radio" name="<?php echo ReservationEvent::Updated;?>
" value="1"
						   <?php if ($_smarty_tpl->tpl_vars['Updated']->value) {?>checked="checked"<?php }?>/><label
						for="updatedYes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>
</label>
					<br/>
					<input id="updatedNo" type="radio" name="<?php echo ReservationEvent::Updated;?>
" value="0"
						   <?php if (!$_smarty_tpl->tpl_vars['Updated']->value) {?>checked="checked"<?php }?>/><label
						for="updatedNo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
				</div>
			</div>

			<div class="notification-row">
				<div class="notification-type">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationDeletedPreference'),$_smarty_tpl);?>

				</div>
				<div class="notification-status">
					<input id="deletedYes" type="radio" name="<?php echo ReservationEvent::Deleted;?>
" value="1"
						   <?php if ($_smarty_tpl->tpl_vars['Deleted']->value) {?>checked="checked"<?php }?>/><label
						for="deletedYes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>
</label>
					<br/>
					<input id="deletedNo" type="radio" name="<?php echo ReservationEvent::Deleted;?>
" value="0"
						   <?php if (!$_smarty_tpl->tpl_vars['Deleted']->value) {?>checked="checked"<?php }?>/><label
						for="deletedNo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
				</div>
			</div>

			<div class="notification-row alt">
				<div class="notification-type">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationApprovalPreference'),$_smarty_tpl);?>

				</div>
				<div class="notification-status">
					<input id="approvedYes" type="radio" name="<?php echo ReservationEvent::Approved;?>
" value="1"
						   <?php if ($_smarty_tpl->tpl_vars['Approved']->value) {?>checked="checked"<?php }?>/><label
						for="approvedYes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceSendEmail'),$_smarty_tpl);?>
</label>
					<br/>
					<input id="approvedNo" type="radio" name="<?php echo ReservationEvent::Approved;?>
" value="0"
						   <?php if (!$_smarty_tpl->tpl_vars['Approved']->value) {?>checked="checked"<?php }?>/><label
						for="approvedNo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PreferenceNoEmail'),$_smarty_tpl);?>
</label>
				</div>
			</div>
		</div>

		<div style="clear:both;margin-top: 15px;">
			<button type="submit" class="button update prompt" name="<?php echo Actions::SAVE;?>
">
				<img src="img/tick-circle.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

			</button>
		</div>
	</form>
</div>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
