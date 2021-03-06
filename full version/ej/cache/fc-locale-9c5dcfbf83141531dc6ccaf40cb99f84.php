<?php return array (
  'plugins.pubIds.urn.urns' => 'URN',
  'plugins.pubIds.urn.displayName' => 'Плагин «URN»',
  'plugins.pubIds.urn.description' => 'Этот плагин включает назначение единообразных имен ресурсов (Uniform Resource Name, URN) для объектов (выпуски, статьи, гранки и дополнительные файлы) в OJS.',
  'plugins.pubIds.urn.manager.settings.description' => 'Пожалуйста, выполните следующие шаги установки, чтобы иметь возможность управлять и использовать URN в OJS:',
  'plugins.pubIds.urn.manager.settings.urnSettings' => 'Настройки URN',
  'plugins.pubIds.urn.manager.settings.urnPrefix' => 'Префикс URN',
  'plugins.pubIds.urn.manager.settings.urnPrefix.description' => 'Префикс URN является постоянной, никогда не меняющейся частью URN (например, «urn:nbn:de:0000-»).',
  'plugins.pubIds.urn.manager.settings.urnSuffix' => 'Суффикс URN',
  'plugins.pubIds.urn.manager.settings.urnSuffix.default' => 'Использовать шаблоны по умолчанию.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.default.description' => '%j.v%vi%i для выпусков<br />%j.v%vi%i.%a для статей<br />%j.v%vi%i.%a.g%g для гранок <br />%j.v%vi%i.%a.s%s для дополнительных файлов.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern' => 'Использовать шаблон, введенный ниже, для генерации суффиксов URN. Используйте %j для аббревиатуры журнала, %v для номера тома, %i для номера выпуска, %Y для года, %a для ID статьи в OJS, %g для ID гранки в OJS, %s для ID дополнительного файла в OJS, %p для номера страницы и %x для «пользовательского идентификатора» (должен быть включен на шаге 4.3 установки журнала).',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.issues' => 'для выпусков',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.articles' => 'для статей',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.galleys' => 'для гранок',
  'plugins.pubIds.urn.manager.settings.urnSuffix.pattern.suppFiles' => 'для длполнительных файлов.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.patternExample' => 'Например, vol%viss%ipp%p cможет создать суффикс URN «vol3iss2pp230».',
  'plugins.pubIds.urn.manager.settings.urnSuffix.description' => 'Суффикс URN может принимать любую форму, но должен быть уникальным для каждого публикуемого объекта.',
  'plugins.pubIds.urn.manager.settings.urnSuffix.publisherId' => 'Использовать «Пользовательский идентификатор» для опубликованных элементов как суффикс URN (должно быть включено на шаге 4.3 установки журнала). Это тот же самый идентификатор, который будет использоваться для публичных адресов (URL).',
  'plugins.pubIds.urn.manager.settings.urnSuffix.customIdentifier' => 'Ввести индивидуальный суффикс URN для каждого опубликованного элемента, независимый и отличающийся от «Пользовательского идентификатора», который упоминается в предыдущей настройке. Вы увидите дополнительное поле ввода URN на странице метаданных для каждого элемента.',
  'plugins.pubIds.urn.manager.settings.clearURNs' => 'Очистить URN',
  'plugins.pubIds.urn.manager.settings.clearURNs.description' => 'Если вы измените вашу конфигурацию URN, то она не затронет URN, которые уже были назначены. После сохранения конфигурации URN используйте эту кнопку, чтобы удалить все существующие URN для того, чтобы новые настройки повлияли на существующие объекты.',
  'plugins.pubIds.urn.manager.settings.clearURNs.confirm' => 'Вы уверены, что хотите удалить все существующие URN?',
  'plugins.pubIds.urn.manager.settings.checkNo' => 'Контрольное число',
  'plugins.pubIds.urn.manager.settings.checkNo.label' => 'Контрольное число будет автоматически рассчитано и добавлено в конец в качестве последнего числа в URN.',
  'plugins.pubIds.urn.manager.settings.namespace' => 'Пространство имен',
  'plugins.pubIds.urn.manager.settings.namespace.choose' => 'Выбрать',
  'plugins.pubIds.urn.manager.settings.namespace.description' => 'Постоянный идентификатор пространства имен обычно необходим для регистрации (например, в Национальной библиотеке Германии).',
  'plugins.pubIds.urn.manager.settings.urnResolver' => 'Адрес (URL) преобразователя',
  'plugins.pubIds.urn.manager.settings.urnResolver.description' => '(например, http://nbn-resolving.de/)',
  'plugins.pubIds.urn.manager.settings.journalContent' => 'Контент журнала',
  'plugins.pubIds.urn.manager.settings.URNsForJournalContent' => 'Выберите объекты, которым должны будут назначаться URN.',
  'plugins.pubIds.urn.manager.settings.enableIssueURN' => 'URN будут назначаться выпускам.',
  'plugins.pubIds.urn.manager.settings.enableArticleURN' => 'URN будут назначаться статьям.',
  'plugins.pubIds.urn.manager.settings.enableGalleyURN' => 'URN будут назначаться гранкам (например HTML или PDF файлам).',
  'plugins.pubIds.urn.manager.settings.enableSuppFileURN' => 'URN будут назначаться дополнительным файлам.',
  'plugins.pubIds.urn.metadata' => 'Метаданные URN',
  'plugins.pubIds.urn.urnSuffix' => 'Суффикс URN',
  'plugins.pubIds.urn.urnSuffix.description' => 'Пользовательский суффикс URN для этой статьи.',
  'plugins.pubIds.urn.calculateCheckNo' => 'Рассчитать контрольное число',
  'plugins.pubIds.urn.editor.urnObjectTypeIssue' => 'выпуск',
  'plugins.pubIds.urn.editor.urnObjectTypeArticle' => 'статья',
  'plugins.pubIds.urn.editor.urnObjectTypeGalley' => 'гранка',
  'plugins.pubIds.urn.editor.urnObjectTypeSuppFile' => 'дополнительный файл',
  'plugins.pubIds.urn.editor.urnNotYetGenerated' => 'Вы видите, как будет выглядеть URN (этот вид может быть неполным). URN еще не был сгенерирован. Опубликование выпуска и просмотр страницы объекта типа «{$pubObjectType}» приведет к автоматической генерации уникального URN для этого объекта типа «{$pubObjectType}».',
  'plugins.pubIds.urn.rt.metadata.urn' => 'Единообразное имя ресурса (Uniform Resource Name)',
  'plugins.pubIds.urn.manager.settings.form.journalContentRequired' => 'Пожалуйста, выберите объекты, которым должны будут назначаться URN.',
  'plugins.pubIds.urn.manager.settings.form.urnPrefixRequired' => 'Пожалуйста, введите префикс URN.',
  'plugins.pubIds.urn.manager.settings.form.urnPrefixPattern' => 'Шаблон префикса URN должен быть в форме "urn:"&lt;NID&gt;":"&lt;NSS&gt;.',
  'plugins.pubIds.urn.manager.settings.form.urnIssueSuffixPatternRequired' => 'Пожалуйста, введите шаблон суффикса URN для выпусков.',
  'plugins.pubIds.urn.manager.settings.form.urnArticleSuffixPatternRequired' => 'Пожалуйста, введите шаблон суффикса URN для статей.',
  'plugins.pubIds.urn.manager.settings.form.urnGalleySuffixPatternRequired' => 'Пожалуйста, введите шаблон суффикса URN для гранок.',
  'plugins.pubIds.urn.manager.settings.form.urnSuppFileSuffixPatternRequired' => 'Пожалуйста, введите шаблон суффикса URN для дополнительных файлов.',
  'plugins.pubIds.urn.manager.settings.form.namespaceRequired' => 'Пожалуйста, выберите пространство имен.',
  'plugins.pubIds.urn.manager.settings.form.urnResolverRequired' => 'Пожалуйста, введите адрес (URL) преобразователя.',
  'plugins.pubIds.urn.form.customIdentifierNotUnique' => 'Заданный суффикс URN уже используется для другого опубликованного элемента. Пожалуйста, введите уникальный суффикс URN для каждого элемента.',
  'plugins.pubIds.urn.form.checkNoRequired' => 'Контрольное число отсутствует.',
); ?>