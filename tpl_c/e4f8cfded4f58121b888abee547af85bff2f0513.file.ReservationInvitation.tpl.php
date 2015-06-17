<?php /* Smarty version Smarty-3.1.16, created on 2015-02-22 16:54:02
         compiled from "C:\xampp\htdocs\lang\du_nl\ReservationInvitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2885354e9fb9ae03ed6-93244749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f8cfded4f58121b888abee547af85bff2f0513' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lang\\du_nl\\ReservationInvitation.tpl',
      1 => 1420035422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2885354e9fb9ae03ed6-93244749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
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
    'RequiresApproval' => 0,
    'ScriptUrl' => 0,
    'AcceptUrl' => 0,
    'DeclineUrl' => 0,
    'ReservationUrl' => 0,
    'ICalUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54e9fb9ae5dc65_80144059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9fb9ae5dc65_80144059')) {function content_54e9fb9ae5dc65_80144059($_smarty_tpl) {?>

	Reserverings Details:
	<br/>
	<br/>

	Start: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	Eindigd: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
	<?php if (count($_smarty_tpl->tpl_vars['ResourceNames']->value)>1) {?>
		Bronnen:<br/>
		<?php  $_smarty_tpl->tpl_vars['resourceName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceName']->key => $_smarty_tpl->tpl_vars['resourceName']->value) {
$_smarty_tpl->tpl_vars['resourceName']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>
<br/>
		<?php } ?>
		<?php } else { ?>
		Bron: <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>
<br/>
	<?php }?>
	Titel: <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<br/>
	Beschrijving: <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>
<br/>

	<?php if (count($_smarty_tpl->tpl_vars['RepeatDates']->value)>0) {?>
		<br/>
		De reservering zal zijn op de volgende data:
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
		<br/>Benodigdheden:<br/>
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

	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<br/>
		E�n of meerdere bronnen die gereserveerd zijn hebben goedkeuring nodig voor gebruik. Deze reservering wordt in behandeling genomen totdat hij is goedgekeurd.
	<?php }?>

	<br/>
	Ben je aanwezig? <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['AcceptUrl']->value;?>
">Ja</a> <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['DeclineUrl']->value;?>
">Nee</a>
	<br/>
	<br/>

	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ReservationUrl']->value;?>
">Bekijk deze reservering</a> |
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ICalUrl']->value;?>
">Voeg toe aan agenda</a> |
	<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Login in Booked Scheduler</a>

<?php }} ?>
