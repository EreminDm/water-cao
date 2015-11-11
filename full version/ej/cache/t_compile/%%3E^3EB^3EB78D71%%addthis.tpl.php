<?php /* Smarty version 2.6.26, created on 2015-09-29 22:13:39
         compiled from rtadmin/addthis.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'rtadmin/addthis.tpl', 16, false),array('function', 'translate', 'rtadmin/addthis.tpl', 18, false),array('function', 'html_options', 'rtadmin/addthis.tpl', 35, false),array('modifier', 'escape', 'rtadmin/addthis.tpl', 30, false),array('modifier', 'array_values', 'rtadmin/addthis.tpl', 35, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "rt.admin.sharing"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form method="post" action='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSharingSettings'), $this);?>
'>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.description"), $this);?>
</p>

<div class="separator">&nbsp;</div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.basic"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"></td>
		<td width="80%"><input type="checkbox" name="sharingEnabled" id="sharingEnabled" <?php if (isset ( $this->_tpl_vars['sharingEnabled'] ) && $this->_tpl_vars['sharingEnabled']): ?> checked="checked" <?php endif; ?> /> <label for="sharingEnabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.enabled"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="sharingUserName"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.userNameLabel"), $this);?>
</label></td>
		<td><input type="text" name="sharingUserName" id="sharingUserName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingUserName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="sharingButtonStyle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.buttonStyleLabel"), $this);?>
</label></td>
		<td>
		<?php echo smarty_function_html_options(array('name' => 'sharingButtonStyle','id' => 'sharingButtonStyle','values' => array_values($this->_tpl_vars['sharingButtonStyleOptions']),'output' => array_values($this->_tpl_vars['sharingButtonStyleOptions']),'selected' => $this->_tpl_vars['sharingButtonStyle']), $this);?>

		</td>
	</tr>
	<tr>
		<td class="label"></td>
		<td><input type="checkbox" name="sharingDropDownMenu" id="sharingDropDownMenu" <?php if (isset ( $this->_tpl_vars['sharingDropDownMenu'] ) && $this->_tpl_vars['sharingDropDownMenu']): ?> checked="checked" <?php endif; ?> /> <label for="sharingDropDownMenu"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.dropDownMenuLabel"), $this);?>
</label></td>
	</tr>
</table>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.advanced"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.customizationLink"), $this);?>
</p>
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"><label for="sharingBrand"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.brandLabel"), $this);?>
</label></td>
		<td width="80%"><input type="text" name="sharingBrand" id="sharingBrand" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingBrand'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="sharingDropDown"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.dropDownLabel"), $this);?>
</label></td>
		<td><textarea rows="4" cols="20" name="sharingDropDown" id="sharingDropDown"><?php echo ((is_array($_tmp=$this->_tpl_vars['sharingDropDown'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="sharingLanguage"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.languageLabel"), $this);?>
</label></td>
		<td>
			<?php echo smarty_function_html_options(array('name' => 'sharingLanguage','id' => 'sharingLanguage','options' => ($this->_tpl_vars['sharingLanguageOptions']),'selected' => $this->_tpl_vars['sharingLanguage']), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="sharingLogo"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.logolabel"), $this);?>
</label></td>
		<td><input type="text" name="sharingLogo" id="sharingLogo" value="<?php echo $this->_tpl_vars['sharingLogo']; ?>
" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="sharingLogoBackground"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.logoBackgroundLabel"), $this);?>
</label></td>
		<td><input type="text" name="sharingLogoBackground" id="sharingLogoBackground" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingLogoBackground'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="sharingLogoColor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing.logoColorLabel"), $this);?>
</label></td>
		<td><input type="text" name="sharingLogoColor" id="sharingLogoColor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingLogoColor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/></td>
	</tr>
</table>

<p><input type="submit" value='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
' class="button defaultButton" /> 
<input type="button" value='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
' class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rtadmin','escape' => false), $this);?>
'" />
</p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
