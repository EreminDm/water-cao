<?php /* Smarty version 2.6.26, created on 2015-02-12 19:28:35
         compiled from file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/blocks/languageToggle/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/blocks/languageToggle/block.tpl', 18, false),array('function', 'url', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/blocks/languageToggle/block.tpl', 18, false),)), $this); ?>

<?php if ($this->_tpl_vars['enableLanguageToggle']): ?>
<div class="block" id="sidebarLanguageToggle">
   <?php $_from = $this->_tpl_vars['languageToggleLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['langkey'] => $this->_tpl_vars['langname']):
?>
      <?php if ($this->_tpl_vars['langkey'] == $this->_tpl_vars['currentLocale']): ?>
         <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/languageToggle/locale/<?php echo $this->_tpl_vars['langkey']; ?>
/flag.png" alt="<?php echo $this->_tpl_vars['langname']; ?>
" title="<?php echo $this->_tpl_vars['langname']; ?>
" width="24" height="16" />
      <?php else: ?>
         <a class="icon" href=<?php if ($this->_tpl_vars['languageToggleNoUser']): ?>'<?php echo ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (strstr ( $this->_tpl_vars['currentUrl'] , '?' )): ?>&<?php else: ?>?<?php endif; ?>setLocale=<?php echo $this->_tpl_vars['langkey']; ?>
'<?php else: ?>'<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'setLocale','path' => $this->_tpl_vars['langkey'],'source' => $_SERVER['REQUEST_URI'],'escape' => false), $this);?>
'<?php endif; ?>>
            <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/languageToggle/locale/<?php echo $this->_tpl_vars['langkey']; ?>
/flag.png" alt="<?php echo $this->_tpl_vars['langname']; ?>
" title="<?php echo $this->_tpl_vars['langname']; ?>
" width="24" height="16" />
         </a>
      <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>