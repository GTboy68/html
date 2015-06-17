<?php /* Smarty version Smarty-3.1.16, created on 2015-02-22 14:44:06
         compiled from "C:\xampp\htdocs\tpl\Ajax\respopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3129654e9dd2627b006-06608409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5867333786739d6d728a6d6b58f278c1330632e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpl\\Ajax\\respopup.tpl',
      1 => 1420035436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3129654e9dd2627b006-06608409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authorized' => 0,
    'hideUserInfo' => 0,
    'fullName' => 0,
    'formatter' => 0,
    'startDate' => 0,
    'endDate' => 0,
    'hideDetails' => 0,
    'title' => 0,
    'resources' => 0,
    'resource' => 0,
    'participants' => 0,
    'user' => 0,
    'accessories' => 0,
    'accessory' => 0,
    'summary' => 0,
    'attributes' => 0,
    'attribute' => 0,
    'attr' => 0,
    'ReservationId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54e9dd26424ce8_53484399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9dd26424ce8_53484399')) {function content_54e9dd26424ce8_53484399($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\lib\\Common/../../lib/external/Smarty/plugins\\modifier.truncate.php';
?>
<?php if ($_smarty_tpl->tpl_vars['authorized']->value) {?>
<div class="res_popup_details" style="margin:0">
	<?php $_smarty_tpl->_capture_stack[0][] = array("name", null, null); ob_start(); ?>
	<div class="user">
		<?php if ($_smarty_tpl->tpl_vars['hideUserInfo']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>

		<?php }?>
	</div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('name',Smarty::$_smarty_vars['capture']['name']);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("dates", null, null); ob_start(); ?>
		<div class="dates"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['startDate']->value,'key'=>'res_popup'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['endDate']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('dates',Smarty::$_smarty_vars['capture']['dates']);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?>
	<?php if (!$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
		<div class="title"><?php if ($_smarty_tpl->tpl_vars['title']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoTitleLabel'),$_smarty_tpl);?>
<?php }?></div>
	<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('title',Smarty::$_smarty_vars['capture']['title']);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("resources", null, null); ob_start(); ?>
	<div class="resources">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Resources"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['resources']->value);?>
):
	<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['resource']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['resource']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
 $_smarty_tpl->tpl_vars['resource']->iteration++;
 $_smarty_tpl->tpl_vars['resource']->last = $_smarty_tpl->tpl_vars['resource']->iteration === $_smarty_tpl->tpl_vars['resource']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['resource_loop']['last'] = $_smarty_tpl->tpl_vars['resource']->last;
?>
		<?php echo $_smarty_tpl->tpl_vars['resource']->value->Name();?>

		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['resource_loop']['last']) {?>, <?php }?>
	<?php } ?>
	</div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('resources',Smarty::$_smarty_vars['capture']['resources']);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("participants", null, null); ob_start(); ?>
	<?php if (!$_smarty_tpl->tpl_vars['hideUserInfo']->value) {?>
	<div class="users">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Participants"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['participants']->value);?>
):
	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['participants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['user']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['user']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['user']->iteration++;
 $_smarty_tpl->tpl_vars['user']->last = $_smarty_tpl->tpl_vars['user']->iteration === $_smarty_tpl->tpl_vars['user']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['participant_loop']['last'] = $_smarty_tpl->tpl_vars['user']->last;
?>
		<?php if (!$_smarty_tpl->tpl_vars['user']->value->IsOwner()) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['user']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['user']->value->LastName),$_smarty_tpl);?>

		<?php }?>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['participant_loop']['last']) {?>, <?php }?>
	<?php } ?>
	</div>
	<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('participants',Smarty::$_smarty_vars['capture']['participants']);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("accessories", null, null); ob_start(); ?>
	<div class="accessories">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Accessories"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['accessories']->value);?>
):
	<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['accessory']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['accessory']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
 $_smarty_tpl->tpl_vars['accessory']->iteration++;
 $_smarty_tpl->tpl_vars['accessory']->last = $_smarty_tpl->tpl_vars['accessory']->iteration === $_smarty_tpl->tpl_vars['accessory']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessory_loop']['last'] = $_smarty_tpl->tpl_vars['accessory']->last;
?>
		<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
 (<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
)
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['accessory_loop']['last']) {?>, <?php }?>
	<?php } ?>
	</div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('accessories',Smarty::$_smarty_vars['capture']['accessories']);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("description", null, null); ob_start(); ?>
	<?php if (!$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
		<div class="summary"><?php if ($_smarty_tpl->tpl_vars['summary']->value!='') {?><?php echo nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['summary']->value,300,"..."));?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);?>
<?php }?></div>
	<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('description',Smarty::$_smarty_vars['capture']['description']);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("attributes", null, null); ob_start(); ?>
	<?php if (!$_smarty_tpl->tpl_vars['hideDetails']->value) {?>
		<?php if (count($_smarty_tpl->tpl_vars['attributes']->value)>0) {?>
			<br/>
			<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['attr'] = new Smarty_variable("att".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id()), null, 0);?>
				<?php $_smarty_tpl->_capture_stack[0][] = array(('').($_smarty_tpl->tpl_vars['attr']->value), null, null); ob_start(); ?>
				<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>
</div>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['attr']->value];?>

				<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add($_smarty_tpl->tpl_vars['attr']->value,Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['attr']->value]);?>

			<?php } ?>
		<?php }?>
	<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Add('attributes',Smarty::$_smarty_vars['capture']['attributes']);?>


	<!-- <?php echo $_smarty_tpl->tpl_vars['ReservationId']->value;?>
 -->

	<?php echo $_smarty_tpl->tpl_vars['formatter']->value->Display();?>

</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InsufficientPermissionsError'),$_smarty_tpl);?>

<?php }?><?php }} ?>
