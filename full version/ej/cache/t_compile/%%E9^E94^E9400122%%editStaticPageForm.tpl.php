<?php /* Smarty version 2.6.26, created on 2015-02-13 10:32:47
         compiled from file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 18, false),array('function', 'plugin_url', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 24, false),array('function', 'fieldLabel', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 35, false),array('function', 'form_language_chooser', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 39, false),array('modifier', 'replace', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 20, false),array('modifier', 'to_array', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 24, false),array('modifier', 'assign', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 37, false),array('modifier', 'escape', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/staticPages/editStaticPageForm.tpl', 46, false),)), $this); ?>
<?php if ($this->_tpl_vars['staticPageId']): ?>
	<?php $this->assign('pageTitle', "plugins.generic.staticPages.editStaticPage"); ?>
<?php else: ?>
	<?php $this->assign('pageTitle', "plugins.generic.staticPages.addStaticPage"); ?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.editInstructions"), $this);?>

<br />
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.staticPages.viewInstructions",'pagesPath' => ((is_array($_tmp=$this->_tpl_vars['pagesPath'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'REPLACEME', "%PATH%") : smarty_modifier_replace($_tmp, 'REPLACEME', "%PATH%"))), $this);?>

<br />
<br />

<form method="post" id="editStaticPageForm" action="<?php if ($this->_tpl_vars['staticPageId']): ?><?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='save')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['staticPageId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['staticPageId']))), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'save'), $this);?>
<?php endif; ?>" >
<input type="hidden" name="edit" value="1" />
<?php if ($this->_tpl_vars['staticPageId']): ?>
	<input type="hidden" name="staticPageId" value="<?php echo $this->_tpl_vars['staticPageId']; ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php if ($this->_tpl_vars['staticPageId']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='edit')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['staticPageId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['staticPageId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'staticPageEditUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'staticPageEditUrl'));?>

			<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='edit')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['staticPageId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['staticPageId']))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'staticPageEditUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'staticPageEditUrl'));?>
<?php endif; ?>
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'editStaticPageForm','url' => $this->_tpl_vars['staticPageEditUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('required' => 'true','name' => 'pagePath','key' => "plugins.generic.staticPages.path"), $this);?>
</td>
		<td width="80%" class="value" ><input type="text" name="pagePath" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" id="path" maxlength="50" class="textField" /></td>
	</tr>
	<tr>
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('required' => 'true','name' => 'title','key' => "plugins.generic.staticPages.pageTitle"), $this);?>
</td>
		<td width="80%" class="value" ><input type="text" name="title[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" id="title" maxlength="50" class="textField" /></td>
	</tr>
	<tr>
		<td width="20%" class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('required' => 'true','name' => 'content','key' => "plugins.generic.staticPages.content"), $this);?>
</td>
		<td>
		<textarea name="content[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" cols="50" rows="30"><?php echo ((is_array($_tmp=$this->_tpl_vars['content'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			<a href="http://tinymce.moxiecode.com?id=powered_by_tinymce"><img src="http://tinymce.sourceforge.net/buttons/powered_by_tinymce.png" border="0" width="88" height="32" alt="Powered by TinyMCE" /></a>
		</td>
	</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" />
<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>