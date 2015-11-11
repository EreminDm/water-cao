<?php return array (
  'plugins.importexport.users.displayName' => 'Плагин «Пользователи в XML»',
  'plugins.importexport.users.description' => 'Этот плагин импортирует и экспортирует пользователей.',
  'plugins.importexport.users.cliUsage' => 'Вызов: {$scriptName} {$pluginName} [команда] ...
Команды:
	import [xmlFileName] [journal_path] [дополнительные флаги]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [role_path1] [role_path2] ...

Дополнительные флаги:
	continue_on_error: Если задан, не останавливает импорт пользователей при возникновении ошибки

	send_notify: Если задан, отправляет импортированным пользователям уведомления по электронной
                 почте с указанием их имен пользователей и паролей

Примеры:
	Импортировать пользователей в myJournal из файла myImportFile.xml, не останавливаясь при ошибке:
	{$scriptName} {$pluginName} import myImportFile.xml myJournal continue_on_error

	Экспортировать всех пользователей из myJournal:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal

	Экспортировать всех пользователей, зарегистрированных как рецензенты, вместе с указанием их роли только в качестве рецензентов:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal reviewer',
  'plugins.importexport.users.import.importUsers' => 'Импортировать пользователей',
  'plugins.importexport.users.import.instructions' => 'Выберите файл данных XML, содержащий информацию о пользователях, для импорта в этот журнал. Подробности о формате этого файла смотрите в помощи журнала.<br /><br />Обратите внимание, что если импортируемый файл содержит имена пользователей или почтовые адреса уже существующие в системе, то данные для этих пользователей не будут импортированы, а все новые роли, которые должны были быть созданы, будут назначены существующим пользователям.',
  'plugins.importexport.users.import.failedToImportUser' => 'Ошибка при импорте пользователя',
  'plugins.importexport.users.import.failedToImportRole' => 'Ошибка при назначении пользователя на роль',
  'plugins.importexport.users.import.dataFile' => 'Файл с данными пользователей',
  'plugins.importexport.users.import.sendNotify' => 'Отправить каждому импортированному пользователю уведомление по электронной почте с указанием его имени пользователя и пароля.',
  'plugins.importexport.users.import.continueOnError' => 'Продолжить импорт остальных пользователей при возникновении ошибки.',
  'plugins.importexport.users.import.noFileError' => 'Файл не был загружен на сервер!',
  'plugins.importexport.users.import.usersWereImported' => 'Следующие пользователи были успешно импортированы в систему',
  'plugins.importexport.users.import.errorsOccurred' => 'При импорте произошли ошибки',
  'plugins.importexport.users.import.confirmUsers' => 'Подтвердите, что это те самые пользователи, которых вы хотите импортировать в систему',
  'plugins.importexport.users.import.warning' => 'Предупреждение',
  'plugins.importexport.users.import.encryptionMismatch' => 'Нельзя использовать пароли, хэшированные алгоритмом {$importHash}; OJS сейчас настроен на использование {$ojsHash}. Если вы продолжите, то вам будет необходимо сбросить пароли импортированных пользователей.',
  'plugins.importexport.users.unknownJournal' => 'Был указан неизвестный путь журнала «{$journalPath}».',
  'plugins.importexport.users.export.exportUsers' => 'Экспортировать пользователей',
  'plugins.importexport.users.export.exportByRole' => 'Экспортировать по ролям',
  'plugins.importexport.users.export.exportAllUsers' => 'Экспортировать всех',
  'plugins.importexport.users.export.errorsOccurred' => 'При экспорте произошли ошибки',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Не могу записать в файл «{$fileName}».',
); ?>