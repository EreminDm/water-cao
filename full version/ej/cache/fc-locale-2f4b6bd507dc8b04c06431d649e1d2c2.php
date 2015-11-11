<?php return array (
  'plugins.importexport.duracloud.displayName' => 'Плагин «Импорт/экспорт DuraCloud»',
  'plugins.importexport.duracloud.description' => 'Этот плагин позволяет архивировать и восстанавливать выпуски, используя для хранения внешнюю службу DuraCloud',
  'plugins.importexport.duracloud.configuration' => 'Конфигурация DuraCloud',
  'plugins.importexport.duracloud.configuration.unconfigured.description' => 'На текущий момент вы не вошли в систему с использованием учетной записи DuraCloud. Пожалуйста, введите ниже ваши логин и пароль от учетной записи DuraCloud. Эти данные не будут сохранены в системе, а используются только для этой сессии.',
  'plugins.importexport.duracloud.configuration.configured.description' => 'На текущий момент вы вошли в систему DuraCloud на <a href="{$url}">{$escapedUrl}</a> с именем пользователя «{$username}». Эти данные не будут сохранены в системе, а используются только для этой сессии. Чтобы немедленно убрать эти данные, щелкните на ссылке <a href="{$logoutUrl}">«Выйти из DuraCloud»</a>.',
  'plugins.importexport.duracloud.configuration.urlRequired' => 'Правильный базовый адрес (URL) DuraCloud обязателен.',
  'plugins.importexport.duracloud.configuration.usernameRequired' => 'Имя пользователя DuraCloud обязательно.',
  'plugins.importexport.duracloud.configuration.passwordRequired' => 'Пароль пользователя DuraCloud обязателен.',
  'plugins.importexport.duracloud.configuration.credentialsInvalid' => 'Не могу подключиться к DuraCloud по указанному адресу с введенными учетными данными. Пожалуйста, проверьте учетные данные и попробуйте снова.',
  'plugins.importexport.duracloud.configuration.space' => 'Пространство',
  'plugins.importexport.duracloud.cliUsage' => 'Вызов: {$scriptName} {$pluginName}
	[base_url] [username] [password]
	[ojs_journal_path] [duracloud_space_id] [command] ...
Команды:
	importIssues [user_name] [issueId1] [issueId2] ...
	exportIssues [issueId1] [issueId2] ...
Пример:
	php {$scriptName} {$pluginName} \\
		https://pkp.duracloud.org myUsername myPassword \\
		demojournal testspace \\
		exportIssues 1',
  'plugins.importexport.duracloud.export' => 'Эксопртировать данные',
  'plugins.importexport.duracloud.export.issues' => 'Экспортировать выпуски',
  'plugins.importexport.duracloud.export.results' => 'Результаты экспорта',
  'plugins.importexport.duracloud.export.results.description' => 'Здесь приведены результаты выполнения экспорта для каждого из выбранных выпусков.',
  'plugins.importexport.duracloud.export.results.success' => '{$issueIdentification} был успешно экспортирован в <a href="{$targetLocation}">{$targetLocationEscaped}</a>.',
  'plugins.importexport.duracloud.export.results.failure' => '{$issueIdentification} не может быть экспортирован.',
  'plugins.importexport.duracloud.import.results' => 'Результаты импорта',
  'plugins.importexport.duracloud.import.results.description' => 'Здесь приведены результаты выполнения импорта для каждого из выбранных выпусков.',
  'plugins.importexport.duracloud.import.results.success' => '{$issueIdentification} был успешно импортирован из «{$contentId}».',
  'plugins.importexport.duracloud.import.results.failure' => '{$contentId} не может быть импортирован.',
  'plugins.importexport.duracloud.selectIssue' => 'Выбрать выпуск',
  'plugins.importexport.duracloud.import.issues' => 'Импортировать выпуски',
  'plugins.importexport.duracloud.import.description' => 'Этот плагин поддерживает импорт данных на основе определения типа документа(Document Type Definition) native.dtd. Поддерживаются следующие корневые узлы: &lt;article&gt;, &lt;articles&gt;, &lt;issue&gt;, and &lt;issues&gt;.',
  'plugins.importexport.duracloud.import.error' => 'Ошибка импорта',
  'plugins.importexport.duracloud.import.error.description' => 'Во время импорта произошла одна или несколько ошибок. Пожалуйста убедитесь, что формат файла импорта полностью соответствует спецификации. Подробная информация об ошибках импорта приведена ниже.',
  'plugins.importexport.duracloud.cliError' => 'ОШИБКА:',
  'plugins.importexport.duracloud.export.error.couldNotWrite' => 'Не могу записать в файл «{$fileName}».',
  'plugins.importexport.duracloud.import.success' => 'Импорт выполнен успешно',
  'plugins.importexport.duracloud.import.success.description' => 'Импорт выполнен успешно. Успешно импортированные элементы приведены ниже.',
); ?>