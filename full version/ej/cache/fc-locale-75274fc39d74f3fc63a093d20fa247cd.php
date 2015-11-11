<?php return array (
  'plugins.importexport.pubIds.displayName' => 'Плагин «XML для открытых идентификаторов»',
  'plugins.importexport.pubIds.description' => 'Этот плагин импортирует и экспортирует открытые идентификаторы',
  'plugins.importexport.pubIds.cliUsage' => 'Вызов: {$scriptName} {$pluginName} [команда] ...
Команды:
	import [xmlFileName] [journal_path] [user_name]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]',
  'plugins.importexport.pubIds.export' => 'Экспортировать открытые идентификаторы',
  'plugins.importexport.pubIds.export.forIssues' => 'Экспортировать открытые идентификаторы',
  'plugins.importexport.pubIds.export.selectIssue' => 'Выбрать выпуск',
  'plugins.importexport.pubIds.export.selectIssue.description' => 'Пожалуйста, выберите выпуски, для объектов которых вы хотите экспортировать открытые идентификаторы.',
  'plugins.importexport.pubIds.import' => 'Импортировать открытые идентификаторы',
  'plugins.importexport.pubIds.import.description' => 'Этот плагин поддерживает импорт открытых идентификаторов на основе определения типа документа (Document Type Definition) pubIds.dtd.',
  'plugins.importexport.pubIds.import.results' => 'Результаты импорта',
  'plugins.importexport.pubIds.import.errors' => 'Ошибки импорта',
  'plugins.importexport.pubIds.import.errors.description' => 'При импорте произошла одна или несколько ошибок. Пожалуйста проверьте, чтобы убедиться, что формат импортируемого файла точно соответствует спецификации. Подробная информация об ошибках импорта приведена ниже.',
  'plugins.importexport.pubIds.import.success' => 'Импорт прошел успешно',
  'plugins.importexport.pubIds.import.success.description' => 'Успешно импортированные открытые идентификаторы приведены ниже.',
  'plugins.importexport.pubIds.cliError' => 'ОШИБКА:',
  'plugins.importexport.pubIds.cliError.unknownJournal' => 'Указанный путь журнала, «{$journalPath}», не существует.',
  'plugins.importexport.pubIds.cliError.unknownUser' => 'Указанный пользователь, «{$userName}», не существует.',
  'plugins.importexport.pubIds.cliError.issueNotFound' => 'Нет выпуска с указанным ID выпуска «{$issueId}».',
  'plugins.importexport.pubIds.cliError.couldNotWrite' => 'Не могу записать в файл «{$fileName}».',
  'plugins.importexport.pubIds.import.error.uploadFailed' => 'Загрузка завершилась неудачей; пожалуйста убедитесь, что загрузки разрешены на вашем сервере и что файл не слишком большой для текущей конфигурации вашего веб-сервера и PHP.',
  'plugins.importexport.pubIds.import.error.unsupportedRoot' => 'Этот плагин не поддерживает указанный корневой узел «{$rootName}». Пожалуйста убедитесь, что файл правильно сформирован, и попробуйте снова.',
  'plugins.importexport.pubIds.import.error.unknownObjectType' => 'Неизвестный тип объекта «{$pubObjectType}» был указан в атрибуте «pubObjectType» элемента со значением «{$pubId}».',
  'plugins.importexport.pubIds.import.error.unknownObject' => 'Объект «{$pubObjectType}» с ID = {$pubObjectId} указанным в элементе со значением «{$pubId}» не существует для этого журнала.',
  'plugins.importexport.pubIds.import.error.pubIdExists' => 'Открытый идентификатор типа «{$pubIdType}» для объекта {$pubObjectType} с ID = {$pubObjectId} уже существует.',
  'plugins.importexport.pubIds.import.error.duplicatePubId' => 'Открытый идентификатор «{$pubId}» уже используется другим объектом.',
  'plugins.importexport.pubIds.import.error.unknownPubId' => 'Импортируемый файл содержит тип открытого идентификатора «{$pubIdType}», который не может обработать ни один плагин открытого идентификатора. Пожалуйста, установите и/или активируйте соответствующий плагин открытого идентификатора перед тем, как попытаться импортировать этот набор данных.',
); ?>