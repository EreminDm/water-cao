<?php return array (
  'plugins.importexport.pubmed.displayName' => 'Плагин «Экспорт в PubMed XML»',
  'plugins.importexport.pubmed.description' => 'Этот плагин экспортирует метаданные статей в формате PubMed XML для индексирования в MEDLINE.',
  'plugins.importexport.pubmed.export' => 'Экспортировать данные',
  'plugins.importexport.pubmed.export.issues' => 'Экспортировать выпуски',
  'plugins.importexport.pubmed.export.selectIssue' => 'Выберите выпуск для экспорта.',
  'plugins.importexport.pubmed.export.articles' => 'Экспортировать статьи',
  'plugins.importexport.pubmed.export.selectArticle' => 'Выберите статьи для экспорта.',
  'plugins.importexport.pubmed.cliUsage' => 'Вызов: 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
{$scriptName} {$pluginName} [xmlFileName] [journal_path] issue [issueId]',
  'plugins.importexport.pubmed.cliError' => 'ОШИБКА:',
  'plugins.importexport.pubmed.export.error.issueNotFound' => 'Нет выпуска с указанным ID выпуска «{$issueId}».',
  'plugins.importexport.pubmed.export.error.articleNotFound' => 'Нет статьи с указанным ID статьи «{$articleId}».',
); ?>