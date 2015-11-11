<?php /* Smarty version 2.6.26, created on 2015-06-18 01:44:30
         compiled from file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/webFeed/templates/rss2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/webFeed/templates/rss2.tpl', 12, false),array('modifier', 'strip', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/webFeed/templates/rss2.tpl', 17, false),array('modifier', 'replace', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/webFeed/templates/rss2.tpl', 30, false),array('modifier', 'date_format', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/webFeed/templates/rss2.tpl', 46, false),array('function', 'url', 'file:/var/www/vhosts/water-ca.org/httpdocs/ej/plugins/generic/webFeed/templates/rss2.tpl', 62, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php echo '?>'; ?>

<rss version="2.0">
	<channel>
				<title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedTitle())) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
</title>
		<link><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</link>

		<?php if ($this->_tpl_vars['journal']->getLocalizedDescription()): ?>
			<?php $this->assign('description', $this->_tpl_vars['journal']->getLocalizedDescription()); ?>
		<?php elseif ($this->_tpl_vars['journal']->getLocalizedSetting('searchDescription')): ?>
			<?php $this->assign('description', $this->_tpl_vars['journal']->getLocalizedSetting('searchDescription')); ?>
		<?php endif; ?>

		<description><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
</description>

				<?php if ($this->_tpl_vars['journal']->getPrimaryLocale()): ?>
			<language><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getPrimaryLocale())) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
</language>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['journal']->getLocalizedSetting('copyrightNotice')): ?>
			<copyright><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedSetting('copyrightNotice'))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
</copyright>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['journal']->getSetting('contactEmail')): ?>
			<managingEditor><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('contactEmail'))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
<?php if ($this->_tpl_vars['journal']->getSetting('contactName')): ?> (<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('contactName'))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
)<?php endif; ?></managingEditor>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['journal']->getSetting('supportEmail')): ?>
			<webMaster><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('supportEmail'))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
<?php if ($this->_tpl_vars['journal']->getSetting('contactName')): ?> (<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('supportName'))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
)<?php endif; ?></webMaster>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['issue']->getDatePublished()): ?>
			<pubDate><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a, %d %b %Y %T %z") : smarty_modifier_date_format($_tmp, "%a, %d %b %Y %T %z")); ?>
</pubDate>
		<?php endif; ?>

						
		<generator>OJS <?php echo ((is_array($_tmp=$this->_tpl_vars['ojsVersion'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</generator>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<ttl>60</ttl>

		<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
			<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
				<item>
										<title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
</title>
					<link><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
</link>
					<description><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
</description>

										<author><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>
</author>
															
					<guid isPermaLink="true"><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
</guid>
					<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
						<pubDate><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a, %d %b %Y %T %z") : smarty_modifier_date_format($_tmp, "%a, %d %b %Y %T %z")); ?>
</pubDate>
					<?php endif; ?>
				</item>
			<?php endforeach; endif; unset($_from); ?>		<?php endforeach; endif; unset($_from); ?>	</channel>
</rss>