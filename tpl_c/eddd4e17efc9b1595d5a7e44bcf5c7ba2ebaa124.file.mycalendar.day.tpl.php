<?php /* Smarty version Smarty-3.1.16, created on 2015-06-16 21:38:09
         compiled from "/var/www/html/tpl/Calendar/mycalendar.day.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194187798055807b21233172-95576365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eddd4e17efc9b1595d5a7e44bcf5c7ba2ebaa124' => 
    array (
      0 => '/var/www/html/tpl/Calendar/mycalendar.day.tpl',
      1 => 1428057622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194187798055807b21233172-95576365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PrevLink' => 0,
    'DayName' => 0,
    'MonthName' => 0,
    'DisplayDate' => 0,
    'NextLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55807b212e7409_38831980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55807b212e7409_38831980')) {function content_55807b212e7409_38831980($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/calendar.css,css/jquery.qtip.min.css,scripts/css/fullcalendar.css,css/schedule.css,scripts/css/jqtree.css','printCssFiles'=>'scripts/css/fullcalendar.print.css'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('Calendar/calendar.filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="calendarHeading">

	<div style="float:left;">
		<a href="<?php echo $_smarty_tpl->tpl_vars['PrevLink']->value;?>
"><img src="img/arrow_large_left.png" alt="Back" /></a>
		<?php echo $_smarty_tpl->tpl_vars['DayName']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['MonthName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Day();?>
, <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Year();?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['NextLink']->value;?>
"><img src="img/arrow_large_right.png" alt="Forward" /></a>
	</div>

	<div style="float:right;">
		<a href="<?php echo PersonalCalendarUrl::Create($_smarty_tpl->tpl_vars['DisplayDate']->value,CalendarTypes::Week);?>
" alt="Week" title="Week"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Week'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-week.png"),$_smarty_tpl);?>
</a>
		<a href="<?php echo PersonalCalendarUrl::Create($_smarty_tpl->tpl_vars['DisplayDate']->value,CalendarTypes::Month);?>
" alt="View Month" title="View Month"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Month'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-select-month.png"),$_smarty_tpl);?>
</a>
	</div>

	<div class="clear">&nbsp;</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('Calendar/mycalendar.common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('view'=>'agendaDay'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
