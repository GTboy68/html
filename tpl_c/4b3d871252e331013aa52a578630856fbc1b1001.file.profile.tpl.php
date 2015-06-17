<?php /* Smarty version Smarty-3.1.16, created on 2015-04-03 12:41:14
         compiled from "/var/www/html/tpl/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1513502832551e6e4a1e7466-30503165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3d871252e331013aa52a578630856fbc1b1001' => 
    array (
      0 => '/var/www/html/tpl/profile.tpl',
      1 => 1428057618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513502832551e6e4a1e7466-30503165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AllowUsernameChange' => 0,
    'Username' => 0,
    'HomepageValues' => 0,
    'HomepageOutput' => 0,
    'Homepage' => 0,
    'AllowNameChange' => 0,
    'FirstName' => 0,
    'LastName' => 0,
    'AllowEmailAddressChange' => 0,
    'Email' => 0,
    'TimezoneValues' => 0,
    'TimezoneOutput' => 0,
    'Timezone' => 0,
    'AllowPhoneChange' => 0,
    'Phone' => 0,
    'AllowOrganizationChange' => 0,
    'Organization' => 0,
    'AllowPositionChange' => 0,
    'Position' => 0,
    'Attributes' => 0,
    'attribute' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_551e6e4a3e7063_46138313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e6e4a3e7063_46138313')) {function content_551e6e4a3e7063_46138313($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/html/lib/Common/../../lib/external/Smarty/plugins/function.html_options.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'scripts/css/colorbox.css'), 0);?>


<div class="success" style="display:none" id="profileUpdatedMessage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourProfileWasUpdated'),$_smarty_tpl);?>
</div>

<div class="validationSummary error" id="validationErrors">
	<ul>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"fname",'key'=>"FirstNameRequired"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"lname",'key'=>"LastNameRequired"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"username",'key'=>"UserNameRequired"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"emailformat",'key'=>"ValidEmailRequired"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"uniqueemail",'key'=>"UniqueEmailRequired"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"uniqueusername",'key'=>"UniqueUsernameRequired"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"additionalattributes",'key'=>''),$_smarty_tpl);?>

	</ul>
</div>

<div id="registrationbox">
	<form class="register" method="post" ajaxAction="<?php echo ProfileActions::Update;?>
" id="frmRegister" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
		<div class="registrationHeader"><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Login'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllFieldsAreRequired'),$_smarty_tpl);?>
)</h3></div>
		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Username"),$_smarty_tpl);?>
<br/>
				<?php if ($_smarty_tpl->tpl_vars['AllowUsernameChange']->value) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"USERNAME",'class'=>"input",'value'=>"Username",'size'=>"20"),$_smarty_tpl);?>

				<?php } else { ?>
					<span><?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
</span>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USERNAME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
"/>
				<?php }?>
			</label>
		</p>

		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DefaultPage"),$_smarty_tpl);?>
<br/>
				<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DEFAULT_HOMEPAGE'),$_smarty_tpl);?>
 class="input">
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['HomepageValues']->value,'output'=>$_smarty_tpl->tpl_vars['HomepageOutput']->value,'selected'=>$_smarty_tpl->tpl_vars['Homepage']->value),$_smarty_tpl);?>

				</select>
			</label>
		</p>

		<div class="registrationHeader"><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Profile'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllFieldsAreRequired'),$_smarty_tpl);?>
)</h3></div>
		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FirstName"),$_smarty_tpl);?>
<br/>
				<?php if ($_smarty_tpl->tpl_vars['AllowNameChange']->value) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"FIRST_NAME",'class'=>"input",'value'=>"FirstName",'size'=>"20"),$_smarty_tpl);?>

				<?php } else { ?>
					<span><?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
</span>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'FIRST_NAME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
"/>
				<?php }?>
			</label>
		</p>

		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LastName"),$_smarty_tpl);?>
<br/>
				<?php if ($_smarty_tpl->tpl_vars['AllowNameChange']->value) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"LAST_NAME",'class'=>"input",'value'=>"LastName",'size'=>"20"),$_smarty_tpl);?>

				<?php } else { ?>
					<span><?php echo $_smarty_tpl->tpl_vars['LastName']->value;?>
</span>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LAST_NAME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['LastName']->value;?>
"/>
				<?php }?>
			</label>
		</p>

		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Email"),$_smarty_tpl);?>
<br/>
				<?php if ($_smarty_tpl->tpl_vars['AllowEmailAddressChange']->value) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"EMAIL",'class'=>"input",'value'=>"Email",'size'=>"20"),$_smarty_tpl);?>

				<?php } else { ?>
					<span><?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
</span>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'EMAIL'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
"/>
				<?php }?>
			</label>
		</p>

		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Timezone"),$_smarty_tpl);?>
<br/>
				<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TIMEZONE'),$_smarty_tpl);?>
 class="input">
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['TimezoneValues']->value,'output'=>$_smarty_tpl->tpl_vars['TimezoneOutput']->value,'selected'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>

				</select>
			</label>
		</p>

		<div class="registrationHeader"><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalInformation'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Optional'),$_smarty_tpl);?>
)</h3></div>
		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Phone"),$_smarty_tpl);?>
<br/>
				<?php if ($_smarty_tpl->tpl_vars['AllowPhoneChange']->value) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"PHONE",'class'=>"input",'value'=>"Phone",'size'=>"20"),$_smarty_tpl);?>

				<?php } else { ?>
					<span><?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
</span>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PHONE'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
"/>
				<?php }?>
			</label>
		</p>

		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Organization"),$_smarty_tpl);?>
<br/>
				<?php if ($_smarty_tpl->tpl_vars['AllowOrganizationChange']->value) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"ORGANIZATION",'class'=>"input",'value'=>"Organization",'size'=>"20"),$_smarty_tpl);?>

				<?php } else { ?>
					<span><?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
</span>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ORGANIZATION'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
"/>
				<?php }?>
			</label>
		</p>

		<p>
			<label class="reg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Position"),$_smarty_tpl);?>
<br/>
				<?php if ($_smarty_tpl->tpl_vars['AllowPositionChange']->value) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"POSITION",'class'=>"input",'value'=>"Position",'size'=>"20"),$_smarty_tpl);?>

				<?php } else { ?>
					<span><?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
</span>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'POSITION'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
"/>
				<?php }?>
			</label>
		</p>

		<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>0) {?>
			<div class="registrationHeader"><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
</h3></div>
			<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
				<p class="customAttribute">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value),$_smarty_tpl);?>

				</p>
			<?php } ?>
		<?php }?>

		<p class="regsubmit">
			<button type="button" class="button update" name="<?php echo Actions::SAVE;?>
" id="btnUpdate">
				<img src="img/tick-circle.png"/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

			</button>
		</p>
	</form>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'FIRST_NAME'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/edit.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.colorbox-min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"profile.js"),$_smarty_tpl);?>


<script type="text/javascript">

	$(document).ready(function ()
	{
		var profilePage = new Profile();
		profilePage.init();
	});

</script>

<div id="modalDiv" style="display:none;text-align:center; top:15%;position:relative;">
	<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
