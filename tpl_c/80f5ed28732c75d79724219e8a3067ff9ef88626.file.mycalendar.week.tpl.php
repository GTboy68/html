<?php /* Smarty version Smarty-3.1.16, created on 2015-02-22 14:51:00
         compiled from "C:\xampp\htdocs\tpl\Calendar\mycalendar.week.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2873654e9dec4027f65-79252267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f5ed28732c75d79724219e8a3067ff9ef88626' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpl\\Calendar\\mycalendar.week.tpl',
      1 => 1420035436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2873654e9dec4027f65-79252267',
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
  'unifunc' => 'content_54e9dec407de86_61790749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9dec407de86_61790749')) {function content_54e9dec407de86_61790749($_smarty_tpl) {?>
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
