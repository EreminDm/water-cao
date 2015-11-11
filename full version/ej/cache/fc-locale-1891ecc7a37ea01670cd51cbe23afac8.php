<?php return array (
  'plugins.importexport.datacite.displayName' => 'Плагин «Экспорт/регистрация DataCite»',
  'plugins.importexport.datacite.description' => 'Этот плагин позволяет экспортировать или зарегистрировать метаданные выпуска, статьи, гранки и дополнительных файлов в формате DataCite.',
  'plugins.importexport.datacite.intro' => 'Если вы хотите зарегистрировать DOI в DataCite, пожалуйста, свяжитесь с управляющим 
		агентом через <a href="http://datacite.org/contact" target="_blank">главную страницу 
		DataCite</a>, который перенаправит вас к вашему региональному члену DataCite. Как только вы
		установите отношения с организацией-членом DataCite, вы должны будете получить 
		доступ к службе DataCite для выдачи постоянных идентификаторов (DOI)
		и регистрации связанных с ними метаданных. Если у вас нет вашего собственного имени пользователя и
		пароля, вы все равно сможете экспортировать в формат DataCite XML, но вы
		не сможете зарегистрировать ваши DOI в DataCite из системы OJS.
		Пожалуйста, обратие внимание, что пароль будет сохраняться как простой текст, то есть не будет шифроваться,
		это требования службы регистрации DataCite.',
  'plugins.importexport.datacite.settings.description' => 'Пожалуйста, <a href="{$settingsUrl}">настройте</a> плагин экспорта DataCite перед тем, как первый раз его использовать.',
  'plugins.importexport.datacite.settings.form.description' => 'Пожалуйста, настройте плагин экспорта DataCite:',
  'plugins.importexport.datacite.settings.form.username' => 'Имя пользователя (символ)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Пожалуйста, введите имя пользователя (символ), который вы получили от DataCite. Имя пользователя не может содержать двоеточие.',
  'plugins.importexport.datacite.export.suppFiles' => 'Экспортировать определенные дополнительные файлы',
  'plugins.importexport.datacite.export.selectSuppFile' => 'Выбрать дополнительные файлы',
  'plugins.importexport.datacite.export.noSuppFiles' => 'Ни один из дополнительных файлов сейчас не имеет назначенных DOI.',
  'plugins.importexport.datacite.export.error.suppFileNotFound' => 'Нет дополнительного файла, соответствующего указанному ID дополнительного файла: {$param}.',
  'plugins.importexport.datacite.cliUsage' => 'Вызов: 
{$scriptName} {$pluginName} export xmlFileName journal_path {issues|articles|galleys|suppfiles} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register journal_path {issues|articles|galleys|suppfiles} objectId1 [objectId2] ...',
); ?>