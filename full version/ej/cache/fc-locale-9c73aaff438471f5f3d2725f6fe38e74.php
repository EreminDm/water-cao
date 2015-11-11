<?php return array (
  'plugins.importexport.medra.displayName' => 'Плагин «Экспорт/регистрация mEDRA»',
  'plugins.importexport.medra.description' => 'Этот плагин экспортирует метаданные выпуска, статьи и гранки в формат Onix for DOI (O4DOI) и регистрирует DOI в регистрационном агентстве mEDRA.',
  'plugins.importexport.medra.intro' => 'Если вы хотите зарегистрировать DOI в mEDRA, пожалуйста, следуйте указаниям на
		<a href="http://www.medra.org/en/guide.htm" target="_blank">главной странице mEDRA</a>,
		что бы получить имя пользователя и пароль. Если у вас нет вашего собственного имени пользователя и
		пароля, вы все равно сможете экспортировать в формат mEDRA XML (Onix for DOI),
		но вы не сможете зарегистрировать ваши DOI в mEDRA из системы OJS. 
		Пожалуйста, обратие внимание, что пароль будет сохраняться как простой текст, то есть не будет шифроваться,
		это требования службы регистрации mEDRA.',
  'plugins.importexport.medra.settings.description' => 'Пожалуйста, <a href="{$settingsUrl}">настройте</a> плагин экспорта mEDRA перед тем, как первый раз его использовать.',
  'plugins.importexport.medra.settings.form.description' => 'Пожалуйста, настройте плагин экспорта mEDRA:',
  'plugins.importexport.medra.settings.form.username' => 'Имя пользователя',
  'plugins.importexport.medra.settings.form.usernameRequired' => 'Пожалуйста, введите ваше имя пользователя mEDRA. Имя пользователя не может содержать двоеточие.',
  'plugins.importexport.medra.settings.form.registrantName' => 'Название организации, зарегистрированной в mEDRA:',
  'plugins.importexport.medra.settings.form.registrantNameRequired' => 'Пожалуйста, введите название организации, зарегистрированной в mEDRA.',
  'plugins.importexport.medra.settings.form.fromFields' => 'Лицо, с которым должно связываться mEDRA при возниконвении технических проблем:',
  'plugins.importexport.medra.settings.form.fromCompany' => 'Организация:',
  'plugins.importexport.medra.settings.form.fromCompanyRequired' => 'Пожалуйста, введите название организации, которая технически отвечает за экспорт DOI (например, организация, которая предоставляет хостинг вашему веб-серверу).',
  'plugins.importexport.medra.settings.form.fromName' => 'Контактное лицо:',
  'plugins.importexport.medra.settings.form.fromNameRequired' => 'Пожалуйста, введите имя контактного лица по техническим вопросам.',
  'plugins.importexport.medra.settings.form.fromEmail' => 'Адрес электронной почты:',
  'plugins.importexport.medra.settings.form.fromEmailRequired' => 'Пожалуйста, введите правильный адрес электронной почты контактного лица по техническим вопросам.',
  'plugins.importexport.medra.settings.form.publicationCountry' => 'Пожалуйста, выберите страну, которая должна быть проинформирована как «страна издания» в mEDRA.',
  'plugins.importexport.medra.settings.form.exportIssuesAs' => 'Пожалуйста выберите, хотите ли вы экспортировать выпуски как <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">«работы» или «манифестации»</a>.',
  'plugins.importexport.medra.settings.form.work' => 'работа',
  'plugins.importexport.medra.settings.form.manifestation' => 'манифестация',
  'plugins.importexport.medra.reset' => 'Сбросить',
  'plugins.importexport.medra.resetDescription' => 'Щелкните на этой кнопке, если вы хотите рассматривать этот объект как никогда ранее не регистрировавшийся (например, когда mEDRA отправляет сообщение об ошибке по электронной почте при первой регистрации). НЕ ЩЕЛКАЙТЕ на этой кнопке, когда вы получаете сообщение об ошибке после потерпевшего неудачу обновления!',
  'plugins.importexport.medra.workOrProduct' => 'ПОМНИТЕ: DOI, назначенные статьям, будут экспортированы в mEDRA как <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">«работы»</a>. DOI, назначенные гранкам, будут экспортироваться как <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">«манифестации»</a>.',
  'plugins.importexport.medra.cliUsage' => 'Вызов: 
{$scriptName} {$pluginName} export xmlFileName journal_path {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register journal_path {issues|articles|galleys} objectId1 [objectId2] ...',
); ?>