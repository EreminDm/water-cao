<?php /* Smarty version 2.6.26, created on 2015-02-19 16:16:15
         compiled from admin/languages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/languages.tpl', 16, false),array('function', 'translate', 'admin/languages.tpl', 18, false),array('modifier', 'escape', 'admin/languages.tpl', 26, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "common.languages"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveLanguageSettings'), $this);?>
">
<div id="languageSettings">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.languageSettings"), $this);?>
</h3>

<table class="form">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "locale.primary"), $this);?>
</td>
	<td width="80%" class="value">
		<select name="primaryLocale" id="primaryLocale" size="1" class="selectMenu">
		<?php $_from = $this->_tpl_vars['installedLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey']):
?>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['localeKey'] == $this->_tpl_vars['primaryLocale']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['localeNames'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		</select>
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.primaryLocaleInstructions"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "locale.supported"), $this);?>
</td>
	<td>
		<table width="100%">
		<?php $_from = $this->_tpl_vars['installedLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey']):
?>
		<tr valign="top">
			<td width="5%"><input type="checkbox" name="supportedLocales[]" id="supportedLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['supportedLocales'] )): ?> checked="checked"<?php endif; ?> /></td>
			<td width="95%">
				<label for="supportedLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['localeNames'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</label>
				<?php if (! $this->_tpl_vars['localesComplete'][$this->_tpl_vars['localeKey']]): ?>
					<span class="formError">*</span>
					<?php $this->assign('incompleteLocaleFound', 1); ?>
				<?php endif; ?>
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.supportedLocalesInstructions"), $this);?>
</span>
		<?php if ($this->_tpl_vars['incompleteLocaleFound']): ?>
			<br/>
			<span class="formError">*</span>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.locale.maybeIncomplete"), $this);?>

		<?php endif; ?>	</td>
</tr>
</table>
</div>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'admin','escape' => false), $this);?>
'" /></p>

</form>

<div class="separator"></div>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'installLocale'), $this);?>
">
<div id="installLanguages">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.installLanguages"), $this);?>
</h3>
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.installedLocales"), $this);?>
</h4>
<table class="data" width="100%">
<?php $_from = $this->_tpl_vars['installedLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey']):
?>
<tr valign="top">
	<td width="30%">&bull;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['localeNames'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</td>
	<td width="70%"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'reloadLocale','locale' => $this->_tpl_vars['localeKey']), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.confirmReload"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.reload"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'reloadDefaultEmailTemplates','locale' => $this->_tpl_vars['localeKey']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.reloadDefaultEmailTemplates"), $this);?>
</a><?php if ($this->_tpl_vars['localeKey'] != $this->_tpl_vars['primaryLocale']): ?>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uninstallLocale','locale' => $this->_tpl_vars['localeKey']), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.confirmUninstall"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.uninstall"), $this);?>
</a><?php endif; ?></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</div>
<div id="installNewLocales">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.installNewLocales"), $this);?>
</h4>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.installNewLocalesInstructions"), $this);?>
</p>
<?php $this->assign('incompleteLocaleFound', 0); ?>
<?php $_from = $this->_tpl_vars['uninstalledLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey']):
?>
<input type="checkbox" name="installLocale[]" id="installLocale-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /> <label for="installLocale-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['localeNames'][$this->_tpl_vars['localeKey']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</label>
<?php if (! $this->_tpl_vars['localesComplete'][$this->_tpl_vars['localeKey']]): ?>
	<span class="formError">*</span>
	<?php $this->assign('incompleteLocaleFound', 1); ?>
<?php endif; ?>
<br />
<?php endforeach; else: ?>
<?php $this->assign('noLocalesToInstall', '1'); ?>
<span class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.noLocalesAvailable"), $this);?>
</span>
<?php endif; unset($_from); ?>
<?php if ($this->_tpl_vars['incompleteLocaleFound']): ?>
	<br />
	<span class="formError">*</span>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.locale.maybeIncomplete"), $this);?>

<?php endif; ?>
<?php if (! $this->_tpl_vars['noLocalesToInstall']): ?>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.installLocales"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'admin','escape' => false), $this);?>
'" /></p>
<?php endif; ?>
</div>
</form>

<div class="separator"></div>
<div id="downloadLocales">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.downloadLocales"), $this);?>
</h3>

<?php if ($this->_tpl_vars['downloadAvailable']): ?>

<table class="data" width="100%">
	<?php $_from = $this->_tpl_vars['downloadableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['downloadableLocale']):
?>
		<tr valign="top">
			<td width="30%">&bull;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['downloadableLocale']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 (<?php echo $this->_tpl_vars['downloadableLocale']['key']; ?>
)</td>
			<td width="70%">
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadLocale','locale' => $this->_tpl_vars['downloadableLocale']['key']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.download"), $this);?>
</a>
			</td>
		</tr>
	<?php endforeach; else: ?>
		<tr valign="top">
			<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
	<?php endif; unset($_from); ?>
</table>
<?php else: ?>	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.languages.downloadUnavailable"), $this);?>

<?php endif; ?></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
