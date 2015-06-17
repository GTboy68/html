<?php /* Smarty version Smarty-3.1.16, created on 2015-05-04 05:03:55
         compiled from "/var/www/html/tpl/forgot_pwd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12869783755546e19b9d8584-21589657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe1a7bd8b81c3270ea61ae12a983d37cb4b5b38' => 
    array (
      0 => '/var/www/html/tpl/forgot_pwd.tpl',
      1 => 1428057618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12869783755546e19b9d8584-21589657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Enabled' => 0,
    'ShowResetEmailSent' => 0,
    'Path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5546e19bb065d7_38792706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5546e19bb065d7_38792706')) {function content_5546e19bb065d7_38792706($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['Enabled']->value) {?>

	<?php if ($_smarty_tpl->tpl_vars['ShowResetEmailSent']->value) {?>
		<div class="success">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ForgotPasswordEmailSent'),$_smarty_tpl);?>
<br/>
			<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::LOGIN;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LogIn"),$_smarty_tpl);?>
</a>
		</div>
	<?php }?>

<div id="forgotbox">
	<form class="forgot" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
		<div class="forgot_pwdHeader">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ForgotPassword'),$_smarty_tpl);?>
</h3>
		</div>
		<div>
			<p class="forgot"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouWillBeEmailedANewPassword'),$_smarty_tpl);?>
</p>
			<p>
				<label class="forgot"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EmailAddress'),$_smarty_tpl);?>
<br />
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"EMAIL",'class'=>"input",'size'=>"20",'tabindex'=>"10"),$_smarty_tpl);?>
</label>
			</p>
			<p class="resetpassword">
				<button type="submit" class="button" name="<?php echo Actions::RESET;?>
" value="<?php echo Actions::RESET;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangePassword'),$_smarty_tpl);?>
</button>
			</p>
		</div>
	</form>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'EMAIL'),$_smarty_tpl);?>

<?php } else { ?>
<div class="error">Disabled</div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
