<?php /* Smarty version Smarty-3.1.16, created on 2015-04-03 12:49:59
         compiled from "/var/www/html/lang/en_us/ReservationDeleted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155752193551e705740eea3-47822008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f48ec6407903b16a2717774d1dc68bf4d733d2' => 
    array (
      0 => '/var/www/html/lang/en_us/ReservationDeleted.tpl',
      1 => 1428057619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155752193551e705740eea3-47822008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'UserName' => 0,
    'StartDate' => 0,
    'EndDate' => 0,
    'ResourceNames' => 0,
    'resourceName' => 0,
    'ResourceName' => 0,
    'Title' => 0,
    'Description' => 0,
    'RepeatDates' => 0,
    'date' => 0,
    'Accessories' => 0,
    'accessory' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_551e705748bea5_14855539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e705748bea5_14855539')) {function content_551e705748bea5_14855539($_smarty_tpl) {?>
	Reservation Details:
	<br/>
	<br/>

	User: <?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
<br/>
	Starting: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	Ending: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	<?php if (count($_smarty_tpl->tpl_vars['ResourceNames']->value)>1) {?>
		Resources:<br/>
		<?php  $_smarty_tpl->tpl_vars['resourceName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceName']->key => $_smarty_tpl->tpl_vars['resourceName']->value) {
$_smarty_tpl->tpl_vars['resourceName']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>
<br/>
		<?php } ?>
		<?php } else { ?>
		Resource: <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>
<br/>
	<?php }?>
	Title: <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<br/>
	Description: <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>
<br/>

	<?php if (count($_smarty_tpl->tpl_vars['RepeatDates']->value)>0) {?>
		<br/>
		The following dates have been removed:
		<br/>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value),$_smarty_tpl);?>
<br/>
	<?php } ?>

	<?php if (count($_smarty_tpl->tpl_vars['Accessories']->value)>0) {?>
		<br/>Accessories:<br/>
		<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
			(<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
) <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
<br/>
		<?php } ?>
	<?php }?>

	<br/>
        <br/>
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Log in to Booked Scheduler</a><?php }} ?>
