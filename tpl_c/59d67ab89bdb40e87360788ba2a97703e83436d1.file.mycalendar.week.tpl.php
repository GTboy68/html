<?php /* Smarty version Smarty-3.1.16, created on 2015-04-03 12:51:56
         compiled from "/var/www/html/tpl/Calendar/mycalendar.week.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1818999607551e70cc274d32-20989842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d67ab89bdb40e87360788ba2a97703e83436d1' => 
    array (
      0 => '/var/www/html/tpl/Calendar/mycalendar.week.tpl',
      1 => 1428057622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1818999607551e70cc274d32-20989842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PrevLink' => 0,
    'MonthName' => 0,
    'DisplayDate' => 0,
    'NextLink' => 0,
    'Today' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_551e70cc2f93b5_58792703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e70cc2f93b5_58792703')) {function content_551e70cc2f93b5_58792703($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/calendar.css,css/jquery.qtip.min.css,scripts/css/fullcalendar.css,css/schedule.css,scripts/css/jqtree.css','printCssFiles'=>'scripts/css/fullcalendar.print.css'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('Calendar/calendar.filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="calendarHeading">

	<div style="float:left;">
		<a href="<?php echo $_smarty_tpl->tpl_vars['PrevLink']->value;?>
"><img src="img/arrow_large_left.png" alt="Back" /></a>
		<?php echo $_smarty_tpl->tpl_vars['MonthName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Day();?>
, <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Year();?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Week'),$_smarty_tpl);?>
)
		<a href="<?php echo $_smarty_tpl->tpl_vars['NextLink']->value;?>
"><img src="img/arrow_large_right.png" alt="Forward" /></a>
	</div>

	<div style="float:right;">
		<a href="<?php echo PersonalCalendarUrl::Create($_smarty_tpl->tpl_vars['Today']->value,CalendarTypes::Day);?>
" alt="Today" title="Today"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-day.png"),$_smarty_tpl);?>
</a>
		<a href="<?php echo PersonalCalendarUrl::Create($_smarty_tpl->tpl_vars['DisplayDate']->value,CalendarTypes::Month);?>
" alt="View Month" title="View Month"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Month'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
</a>
	</div>

	<div class="clear">&nbsp;</div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('Calendar/mycalendar.common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('view'=>'agendaWeek'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
