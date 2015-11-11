<?php /* Smarty version 2.6.26, created on 2015-02-13 10:29:36
         compiled from file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 14, false),array('function', 'plugin_url', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 21, false),array('function', 'url', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 38, false),array('modifier', 'replace', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 16, false),array('modifier', 'escape', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 36, false),array('modifier', 'strip_tags', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 37, false),array('modifier', 'truncate', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 37, false),array('modifier', 'to_array', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 38, false),array('block', 'iterate', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/settingsForm.tpl', 34, false),)), $this); ?>
<?php $this->assign('pageTitle', "plugins.generic.staticPages.displayName"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.settingInstructions"), $this);?>

<br />
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.viewInstructions",'pagesPath' => ((is_array($_tmp=$this->_tpl_vars['pagesPath'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'REPLACEME', "%PATH%") : smarty_modifier_replace($_tmp, 'REPLACEME', "%PATH%"))), $this);?>


<br />
<br />

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'edit'), $this);?>
">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="listing">
	<tr><td colspan="3" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.path"), $this);?>
</td>
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.pageTitle"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="3" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'staticPages','item' => 'staticPage')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['staticPage']->getPath())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td width="50%" class="value" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['staticPage']->getStaticPageTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")); ?>
</td>
		<td width="30%"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'pages','op' => 'view','path' => $this->_tpl_vars['staticPage']->getPath()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.view"), $this);?>
</a> | <a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='edit')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['staticPage']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['staticPage']->getId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> | <a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='delete')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['staticPage']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['staticPage']->getId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="3" class="<?php if ($this->_tpl_vars['staticPages']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['staticPages']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.noneExist"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; ?>

</table>
<a class="action" href=<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'add'), $this);?>
><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.addNewPage"), $this);?>
</a>

<p><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.done"), $this);?>
" class="button defaultButton" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'plugins','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>