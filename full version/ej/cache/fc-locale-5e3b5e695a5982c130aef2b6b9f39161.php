<?php return array (
  'plugins.importexport.native.displayName' => 'Плагин «Статьи и выпуски в XML»',
  'plugins.importexport.native.description' => 'Этот плагин импортирует и экспортирует статьи и выпуски',
  'plugins.importexport.native.cliUsage' => 'Вызов: {$scriptName} {$pluginName} [команда] ...
Команды:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Для импорта данных требуются те или иные дополнительные параметры в зависимости 
от корневого узла XML-документа.

Если корневой узел <article> или <articles>, требуются дополнительные параметры.
Разрешены следующие форматы:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.export' => 'Экспортировать данные',
  'plugins.importexport.native.export.issues' => 'Экспортировать выпуски',
  'plugins.importexport.native.export.sections' => 'Экспортировать разделы',
  'plugins.importexport.native.export.articles' => 'Экспортировать статьи',
  'plugins.importexport.native.selectIssue' => 'Выберите выпуск',
  'plugins.importexport.native.selectArticle' => 'Выберите статью',
  'plugins.importexport.native.import.articles' => 'Импортировать статьи',
  'plugins.importexport.native.import.articles.description' => 'Импортируемый вами файл содержит одну или несколько статей. Вы должны выбрать выпуск и раздел, в который импортируются эти статьи; если вы хотите импортировать их в разные разделы и выпуски, то вы можете либо разбить их на разные XML-файлы, либо переместить их в соответствующие выпуски и разделы после импорта.',
  'plugins.importexport.native.import' => 'Импортировать данные',
  'plugins.importexport.native.import.description' => 'Это плагин поддерживает импорт на основе определения типа документа (Document Type Definition) native.dtd. Поддерживаются корневые узлы <article>, <articles>, <issue> и <issues>.',
  'plugins.importexport.native.import.error' => 'Ошибка импорта',
  'plugins.importexport.native.import.error.description' => 'При импорте произошла одна или несколько ошибок. Пожалуйста проверьте, чтобы убедиться, что формат импортируемого файла точно соответствует спецификации. Подробная информация об ошибках импорта приведена ниже.',
  'plugins.importexport.native.cliError' => 'ОШИБКА:',
  'plugins.importexport.native.error.uploadFailed' => 'Загрузка завершилась неудачей; пожалуйста убедитесь, что загрузки разрешены на вашем сервере и что файл не слишком большой для текущей конфигурации вашего веб-сервера и PHP.',
  'plugins.importexport.native.error.unknownUser' => 'Указанный пользователь, «{$userName}», не существует.',
  'plugins.importexport.native.error.unknownJournal' => 'Указанный путь журнала, «{$journalPath}», не существует.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Не могу записать в файл «{$fileName}».',
  'plugins.importexport.native.export.error.sectionNotFound' => 'Нет раздела с указанным идентификатором раздела «{$sectionIdentifier}».',
  'plugins.importexport.native.export.error.issueNotFound' => 'Нет выпуска с указанным ID выпуска «{$issueId}».',
  'plugins.importexport.native.export.error.articleNotFound' => 'Нет статьи с указанным ID статьи «{$articleId}».',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Этот плагин не поддерживает указанный корневой узел «{$rootName}». Пожалуйста убедитесь, что файл правильно сформирован, и попробуйте снова.',
  'plugins.importexport.native.import.error.titleMissing' => 'Название выпуска отсутствует.',
  'plugins.importexport.native.import.error.defaultTitle' => 'НАЗВАНИЕ ОТСУТСТВУЕТ',
  'plugins.importexport.native.import.error.unknownIdentificationType' => 'Неизвестный тип идентификации «{$identificationType}» был указан в аттрибуте «identification» для элемента «issue» выпуска «{$issueTitle}».',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'Неверное логическое значение «{$value}» было задано. Пожалуйста, используйте «true» или «false».',
  'plugins.importexport.native.import.error.invalidDate' => 'Была задана неверная дата «{$value}».',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Данные были встроены с помощью неизвестного типа кодирования «{$type}».',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Не могу сохранить локальную копию «{$originalName}».',
  'plugins.importexport.native.import.error.illegalUrl' => 'Указанный адрес (URL) «{$url}» для выпуска «{$issueTitle}» является неправильным. Импорт из сети Интернет поддерживает только протоколы http, https, ftp и ftps.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'Был задан неизвестный тип дополнительного файла «{$suppFileType}».',
  'plugins.importexport.native.import.error.couldNotCopy' => 'Указанный адрес (URL) «{$url}» не может быть скопирован в локальный файл.',
  'plugins.importexport.native.import.error.duplicatePublicGalleyId' => 'Открытый ID, заданный для импортируемой гранки, «{$publicId}» уже используется другой гранкой для той же самой статьи «{$articleTitle}».',
  'plugins.importexport.native.import.error.duplicatePublicSuppFileId' => 'Открытый ID, заданный для импортируемого допонительного файла, «{$suppFileTitle}» уже используется другим дополнительным файлом для той же самой статьи, «{$otherSuppFileTitle}».',
  'plugins.importexport.native.import.error.duplicatePublicArticleId' => 'Открытый ID, заданный для импортируемой статьи, «{$articleTitle}» уже используется другой статьей, «{$otherArticleTitle}».',
  'plugins.importexport.native.import.error.duplicatePublicIssueId' => 'Открытый ID, заданный для импортируемого выпуска, «{$issueTitle}» уже используется другим выпуском, «{$otherIssueTitle}».',
  'plugins.importexport.native.import.error.sectionTitleMissing' => 'Название раздела отсутствует в выпуске «{$issueTitle}». Пожалуйста убедитесь, что XML-документ соответствует DTD.',
  'plugins.importexport.native.import.error.sectionMismatch' => 'Название раздела «{$sectionTitle}» в выпуске «{$issueTitle}» совпадает с существующим разделом журнала, но указанная аббревиатура («{$sectionAbbrev}») соответствует другому разделу.',
  'plugins.importexport.native.import.error.articleTitleMissing' => 'В разделе «{$sectionTitle}» выпуска «{$issueTitle}» отсутствует заголовок статьи. Пожалуйста убедитесь, что XML-документ соответствует DTD и что заголовок был указан на языке журнала.',
  'plugins.importexport.native.import.error.articleTitleLocaleUnsupported' => 'Заголовок статьи («{$articleTitle}») был приведен в выпуске «{$issueTitle}» на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleAbstractLocaleUnsupported' => 'Аннотация статьи («{$articleTitle}») была приведена в выпуске «{$issueTitle}» на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'Отсутствует метка гранки для статьи «{$articleTitle}» в разделе «{$sectionTitle}» выпуска «{$issueTitle}».',
  'plugins.importexport.native.import.error.suppFileMissing' => 'Отсутствует дополнительный файл для статьи «{$articleTitle}» в разделе «{$sectionTitle}» выпуска «{$issueTitle}».',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'Отсутствует файл гранки для статьи «{$articleTitle}» в разделе «{$sectionTitle}» выпуска «{$issueTitle}».',
  'plugins.importexport.native.import.error.issueTitleLocaleUnsupported' => 'Название выпуска «{$issueTitle}» было приведено на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.issueDescriptionLocaleUnsupported' => 'Описание выпуска «{$issueTitle}» было приведено на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.coverLocaleUnsupported' => 'Обложка выпуска «{$issueTitle}» была приведена на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.sectionTitleLocaleUnsupported' => 'Название раздела («{$sectionTitle}») было приведено в выпуске «{$issueTitle}» на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.sectionAbbrevLocaleUnsupported' => 'Аббревиатура раздела («{$sectionAbbrev}») была приведена в выпуске («{$issueTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.sectionIdentifyTypeLocaleUnsupported' => 'Тип, идентифицирующий раздел («{$sectionIdentifyType}»), был приведен в выпуске («{$issueTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.sectionPolicyLocaleUnsupported' => 'Политика раздела ("{$sectionPolicy}") была приведена в выпуске («{$issueTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'Название раздела «{$section1Title}» и название раздела «{$section2Title}» в выпуске «{$issueTitle}» совпали с различными существующими разделами журнала.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'Название раздела «{$sectionTitle}» в выпуске «{$issueTitle}» совпало с существующим разделом журнала, но другое название этого раздела не совпадает с другим названием существующего раздела журнала.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'Аббревиатура раздела «{$section1Abbrev}» и аббревиатура раздела «{$section2Abbrev}» в выпуске «{$issueTitle}» совпали с различными существующими разделами журнала.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'Аббревиатура раздела «{$sectionAbbrev}» в выпуске «{$issueTitle}» совпала с существующим разделом журнала, но другая аббревиатура этого раздела не совпала с другой аббревиатурой существующего раздела журнала.',
  'plugins.importexport.native.import.error.articleDisciplineLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведена дисциплина на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleTypeLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведен тип статьи на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSubjectLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведена тема статьи на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSubjectClassLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведена тематическая классификация статьи на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleCoverageGeoLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» был приведен географический охват на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleCoverageChronLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» был приведен хронологический охват на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleCoverageSampleLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» было приведено описание исследуемого образца на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSponsorLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведен спонсор статьи на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleAuthorCompetingInterestsLocaleUnsupported' => 'Для автора статьи «{$articleTitle}» («{$authorFullName}») в выпуске «{$issueTitle}» была приведена Декларация о конфликте интересов  на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleAuthorBiographyLocaleUnsupported' => 'Для автора статьи «{$articleTitle}» («{$authorFullName}») в выпуске «{$issueTitle}» была приведена биография на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleAuthorAffiliationLocaleUnsupported' => 'Для автора статьи «{$articleTitle}» («{$authorFullName}») в выпуске «{$issueTitle}» была приведена организация, к которой относится автор, на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведена гранка на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFileTitleLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» был приведен дополнительный файл («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFileCreatorLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» был приведен создатель дополнительного файла («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFileSubjectLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведена тема дополнительного файла («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFileTypeOtherLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» был приведен тип дополнительного файла («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFileDescriptionLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» было приведено описание дополнительного файла («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFilePublisherLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» был приведен издатель дополнительного файла («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFileSponsorLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» был приведен спонсор дополнительного файла («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.articleSuppFileSourceLocaleUnsupported' => 'Для статьи «{$articleTitle}» в выпуске «{$issueTitle}» была приведен источник дополнительного файла («{$suppFileTitle}») на языке («{$locale}»), который данный журнал не поддерживает.',
  'plugins.importexport.native.import.error.invalidPubId' => 'Импортируемый файл содержит набор данных с неправильным {$pubIdType}: «{$pubId}».',
  'plugins.importexport.native.import.error.duplicatePubId' => 'Импортируемый файл содержит набор данных с {$pubIdType} «{$pubId}», который уже существует для другого объекта в базе данных. Пожалуйста удостоверьтесь, что вы никогда ранее не импортировали объекты с ID, которые уже существуют в базе данных.',
  'plugins.importexport.native.import.error.unknownPubId' => 'Импортируемый файл содержит набор данных с типом ID «{$pubIdType}», который не может обработать ни один ID-плагин. Пожалуйста, установите и/или активируйте соответствующий ID-плагин перед тем, как попытаться импортировать этот набор данных.',
  'plugins.importexport.native.import.success' => 'Импорт успешно завершен',
  'plugins.importexport.native.import.success.description' => 'Импорт успешно завершен. Успешно импортированные элементы приведены ниже.',
); ?>