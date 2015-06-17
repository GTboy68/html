<?php /* Smarty version Smarty-3.1.16, created on 2015-02-22 14:35:26
         compiled from "C:\xampp\htdocs\tpl\Reservation\participation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2435754e9db1e742bb7-22761331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a911a1d5aff19419d63137617f75065792607b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpl\\Reservation\\participation.tpl',
      1 => 1420035436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435754e9db1e742bb7-22761331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54e9db1e75a2c5_09434465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9db1e75a2c5_09434465')) {function content_54e9db1e75a2c5_09434465($_smarty_tpl) {?>
<div id="reservationParticipation">
	<ul class="no-style">
		<li>
			<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ParticipantList"),$_smarty_tpl);?>
<br/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <input type="text" id="participantAutocomplete" class="input" style="width:250px;"/>
				or
				<button id="promptForParticipants" type="button" class="button" style="display:inline">
					<img src="img/user-plus.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SelectUser'),$_smarty_tpl);?>

				</button>
				<button id="promptForGroupParticipants" type="button" class="button" style="display:inline">
					<img src="img/users.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>

				</button>
			</label>

			<div id="participantList">
				<ul></ul>
			</div>
			<div id="participantDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddParticipants'),$_smarty_tpl);?>
" class="dialog"></div>
			<div id="participantGroupDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddParticipants'),$_smarty_tpl);?>
" class="dialog"></div>
		</li>
		<li>
			<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"InvitationList"),$_smarty_tpl);?>
<br/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <input type="text" id="inviteeAutocomplete" class="input" style="width:250px;"/>
				or
				<button id="promptForInvitees" type="button" class="button" style="display:inline">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"user-plus.png"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SelectUser'),$_smarty_tpl);?>

				</button>
				<button id="promptForGroupInvitees" type="button" class="button" style="display:inline">
					<img src="img/users.png"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>

				</button>
			</label>

			<div id="inviteeList">
				<ul></ul>
			</div>
			<div id="inviteeDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteOthers'),$_smarty_tpl);?>
" class="dialog"></div>
			<div id="inviteeGroupDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteOthers'),$_smarty_tpl);?>
" class="dialog"></div>
		</li>
	</ul>
</div><?php }} ?>
