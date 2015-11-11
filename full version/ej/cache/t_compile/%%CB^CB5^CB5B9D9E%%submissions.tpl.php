<?php /* Smarty version 2.6.26, created on 2015-11-06 09:39:05
         compiled from about/submissions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'about/submissions.tpl', 22, false),array('function', 'translate', 'about/submissions.tpl', 22, false),array('modifier', 'escape', 'about/submissions.tpl', 31, false),array('modifier', 'nl2br', 'about/submissions.tpl', 45, false),array('modifier', 'string_format', 'about/submissions.tpl', 83, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "about.submissions"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['currentJournal']->getSetting('journalPaymentsEnabled') && ( $this->_tpl_vars['currentJournal']->getSetting('submissionFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('fastTrackFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('publicationFeeEnabled') )): ?>
	<?php $this->assign('authorFees', 1); ?>
<?php endif; ?>

<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions','anchor' => 'onlineSubmissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('authorGuidelines') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions','anchor' => 'authorGuidelines'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('copyrightNotice') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions','anchor' => 'copyrightNotice'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('privacyStatement') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions','anchor' => 'privacyStatement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['authorFees']): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions','anchor' => 'authorFees'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorFees"), $this);?>
</a></li><?php endif; ?>	
</ul>

<div id="onlineSubmissions"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</h3>
<p>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.haveAccount",'journalTitle' => ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
<br />
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.login"), $this);?>
</a>
</p>
<p>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.needAccount"), $this);?>
<br />
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.registration"), $this);?>
</a>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions.registrationRequired"), $this);?>
</p>

<div class="separator">&nbsp;</div>
</div>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('authorGuidelines') != ''): ?>
<div id="authorGuidelines"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('authorGuidelines'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['submissionChecklist']): ?>
	<div id="submissionPreparationChecklist"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist"), $this);?>
</h3>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist.description"), $this);?>
</p>
	<ol>
		<?php $_from = $this->_tpl_vars['submissionChecklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checklistItem']):
?>
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</li>	
		<?php endforeach; endif; unset($_from); ?>
	</ol>
	<div class="separator">&nbsp;</div>
	</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('copyrightNotice') != ''): ?>
<div id="copyrightNotice"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('copyrightNotice'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('privacyStatement') != ''): ?><div id="privacyStatement"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('privacyStatement'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['authorFees']): ?>

<div id="authorFees"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.payment.authorFees"), $this);?>
</h3>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorFeesMessage"), $this);?>
</p>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('submissionFeeEnabled')): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('submissionFeeName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('submissionFee'))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 (<?php echo $this->_tpl_vars['currentJournal']->getSetting('currency'); ?>
)<br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('submissionFeeDescription'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('fastTrackFeeEnabled')): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('fastTrackFeeName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('fastTrackFee'))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 (<?php echo $this->_tpl_vars['currentJournal']->getSetting('currency'); ?>
)<br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('fastTrackFeeDescription'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<p>	
	<?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publicationFeeEnabled')): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('publicationFeeName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('publicationFee'))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 (<?php echo $this->_tpl_vars['currentJournal']->getSetting('currency'); ?>
)<br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('publicationFeeDescription'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<p>	
	<?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('waiverPolicy') != ''): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('waiverPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
	<?php endif; ?>
</div>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
