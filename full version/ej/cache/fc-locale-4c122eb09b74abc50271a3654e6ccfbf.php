<?php return array (
  'plugins.generic.lucene.displayName' => 'Плагин поиска «Lucene»',
  'plugins.generic.lucene.description' => 'Плагин «Lucene» обеспечивает поддержку нескольких языков, улучшает релевантность результатов поиска, ускоряет индексацию, улучшает масштабирование и многое другое.',
  'plugins.generic.lucene.faceting.displayName' => 'Плагин фасетизации «Lucene»',
  'plugins.generic.lucene.faceting.description' => 'Плагин блока фасетизации для Lucene',
  'plugins.generic.lucene.faceting.title' => 'уточните поисковый запрос',
  'plugins.generic.lucene.faceting.discipline' => 'Дисциплина',
  'plugins.generic.lucene.faceting.subject' => 'Ключевое слово',
  'plugins.generic.lucene.faceting.type' => 'Метод/Подход',
  'plugins.generic.lucene.faceting.coverage' => 'Охват',
  'plugins.generic.lucene.faceting.journalTitle' => 'Журнал',
  'plugins.generic.lucene.faceting.authors' => 'Автор',
  'plugins.generic.lucene.faceting.publicationDate' => 'Дата публикации',
  'plugins.generic.lucene.message.coreNotFound' => 'Запрошенное ядро «{$core}» не было найдено на сервере Solr. Оно подключено?',
  'plugins.generic.lucene.message.indexingIncomplete' => 'Произошла ошибка в процессе индексации: Обработано {$numProcessed} из пакета в {$batchCount} ({$numDeleted} удаленных документов в этом пакете).',
  'plugins.generic.lucene.message.indexOnline' => 'Индекс с {$numDocs} документами подключен.',
  'plugins.generic.lucene.message.pullIndexingDisabled' => 'Самостоятельная индексация сервером отключена. Пожалуйста, включите ее в настройках плагина «Lucene».',
  'plugins.generic.lucene.message.searchServiceOffline' => 'К сожалению, служба поиска OJS сейчас отключена.',
  'plugins.generic.lucene.message.techAdminInformed' => 'Технический администратор этого журнала был проинформирован о проблеме.',
  'plugins.generic.lucene.message.webServiceError' => 'Веб-служба Lucene вернула ошибку.',
  'plugins.generic.lucene.rebuildIndex.pullResult' => '{$numMarked} статей помечено для обновления',
  'plugins.generic.lucene.results.didYouMean' => 'Вы хотели',
  'plugins.generic.lucene.results.orderBy' => 'Упорядочить результат по',
  'plugins.generic.lucene.results.orderBy.relevance' => 'Релевантности',
  'plugins.generic.lucene.results.orderBy.author' => 'Авторам',
  'plugins.generic.lucene.results.orderBy.issue' => 'Выпускам',
  'plugins.generic.lucene.results.orderBy.date' => 'Дате публикации',
  'plugins.generic.lucene.results.orderBy.journal' => 'Названию журнала',
  'plugins.generic.lucene.results.orderBy.article' => 'Названию статьи',
  'plugins.generic.lucene.results.orderDir.asc' => 'По возрастанию',
  'plugins.generic.lucene.results.orderDir.desc' => 'По убыванию',
  'plugins.generic.lucene.results.similarDocuments' => 'похожие документы',
  'plugins.generic.lucene.results.syntaxInstructions' => 'Советы по поиску: <ul>
			<li>Поиск производится независимо от регистра (заглавные и строчные буквы не различаются)</li>
			<li>Общие слова игнорируются</li>
			<li>По умолчанию, в результатах поиска возвращаются статьи, содержащие <em>любое</em> слово из запроса (то есть, предполагается условие <em>OR</em>)</li>
			<li>Если слово должно обязательно присутствовать в статье, поставьте в начале знак <strong>+</strong>, например, <em>+журнал +доступ научный академический</em></li>
			<li>Чтобы найти статьи, содержащие все слова, соединяйте их с помощью <em>AND</em>, например, <em>образование AND исследование</em></li>
			<li>Чтобы слово не попадало в результаты поиска, поставьте перед ним знак <strong>-</strong> или <em>NOT</em>, например, <em>онлайн -политика</em> или <em>онлайн NOT политика</em></li>
			<li>Для поиска точной фразы, заключите ее в кавычки, например, <em>"Открытый доступ к изданиям"</em>. Подсказка: заключение в кавычки китайских или японских слов поможет вам найти точное совпадение в полях с несколькими языками, например, "中国".</li> 
			<li>Используйте круглые скобки для построения более сложных запросов, например, <em>архив ((журнал AND конференция) NOT тезисы)</em></li>
		 </ul>',
  'plugins.generic.lucene.settings' => 'Настройки',
  'plugins.generic.lucene.settings.autosuggest' => 'Автоподстановка (показывать раскрывающийся список с динамически меняющимися предлагаемыми поисковыми терминами в процессе ввода поискового запроса)',
  'plugins.generic.lucene.settings.autosuggestTypeExplanation' => '<strong>Проверять термины на результат</strong>: Предлагаются только термины, которые действительно дадут результаты при поиске. Предложения будут 
		перепроверены по конкретному журналу и терминам, уже введенным в другие поисковые поля.<br />
		<strong>Использовать глобальный словарь</strong>: Этот вариант быстрее, требует меньше ресурсов сервера при поиске и, следовательно, лучше масштабируется 
		на больших инсталляциях. Хотя предложения могут содержать неподходящие термины, то есть термины из других журналов или термины, которые не дают 
		результатов при поиске.',
  'plugins.generic.lucene.settings.autosuggestTypeFaceting' => 'Проверять термины на результат',
  'plugins.generic.lucene.settings.autosuggestTypeSuggester' => 'Использовать глобальный словарь',
  'plugins.generic.lucene.settings.customRanking' => 'Пользовательское ранжирование (установить индивидуальные веса ранжирования для разделов журнала)',
  'plugins.generic.lucene.settings.description' => 'Плагин «Lucene» получает доступ к индексу поиска Lucene через сервер Solr. Эта страница конфигурации позволяет вам настроить доступ к серверу Solr.
		<strong>Пожалуйста убедитесь, что вы прочитали файл README плагина (plugins/generic/lucene/README) до того, как попытаетесь изменить конфигурацию по умолчанию.</strong>
		Если вы используете сценарий встраивания, находясь за брандмауэром, как описано в файле README, то возможно вам стоит оставить все параметры настройки без изменений.',
  'plugins.generic.lucene.settings.faceting' => 'Фасетизация (отобразить блок навигации с дополнительными фильтрами для уточнения вашего поиска)',
  'plugins.generic.lucene.settings.facetingSelectCategory' => 'Вы можете выбрать конкретные категории фасетов (соответствующие метаданные должны быть выбраны для индексирования на шаге 3.4 установки журнала)',
  'plugins.generic.lucene.settings.featureDescription' => 'Плагин «Lucene» предоставляет несколько дополнительных возможностей для поиска, Большинство из этих возможностей включены по умолчанию, но могут быть отключены или настроены.',
  'plugins.generic.lucene.settings.highlighting' => 'Выделение (показывать небольшой фрагмент полного текста каждой статьи, содержащий ключевые слова из поискового запроса)',
  'plugins.generic.lucene.settings.instId' => 'Уникальный ID инсталляции',
  'plugins.generic.lucene.settings.instIdRequired' => 'Пожалуйста, введите ID, который уникальным образом идентифицирует эту инсталляцию OJS для поискового сервера Solr.',
  'plugins.generic.lucene.settings.instIdInstructions' => 'Если вы используете централизованный поисковый сервер, то вам необходимо будет задать уникальный ID инсталляции для каждой из инсталляций OJS, использующих одинаковый поисковый индекс. Это может быть любой произвольный текст, но он должен быть разным для каждого из участвующих серверов OJS (например, статический IP-адрес сервера, если у вас на каждом сервере установлена одна инсталляция OJS).',
  'plugins.generic.lucene.settings.internalError' => 'Неправильный выбор.',
  'plugins.generic.lucene.settings.luceneSettings' => 'Плагин «Lucene»: Настройки',
  'plugins.generic.lucene.settings.password' => 'Пароль',
  'plugins.generic.lucene.settings.passwordInstructions' => 'Пожалуйста, введите пароль сервера Solr.',
  'plugins.generic.lucene.settings.passwordRequired' => 'Пожалуйста, введите правильный пароль для аутентификации сервера поиска Solr.',
  'plugins.generic.lucene.settings.pullIndexing' => 'Самостоятельная индексация сервером (pull indexing — это расширенная возможность, более подробную информацию можно найти в файле README)',
  'plugins.generic.lucene.settings.searchEndpoint' => 'Адрес (URL) конечной точки поиска',
  'plugins.generic.lucene.settings.searchEndpointInstructions' => 'Конечная точка поиска Solr состоит из адреса (URL) сервера и обработчика поиска. В качестве примера воспользуйтесь настройкой по умолчанию. Измените ее только в том случае, если вы используете централизованный поисковый сервер.',
  'plugins.generic.lucene.settings.searchEndpointRequired' => 'Пожалуйста, введите правильный адрес (URL), представляющий конечную точку поиска (поисковый сервер Solr и обработчик поиска), к которой вы хотите подключиться.',
  'plugins.generic.lucene.settings.searchFeatures' => 'Настройка возможностей поиска',
  'plugins.generic.lucene.settings.simdocs' => '«Еще похожих (показывать ссылку «похожие документы» для каждого результата поиска)',
  'plugins.generic.lucene.settings.solrServerSettings' => 'Настройки сервера Solr',
  'plugins.generic.lucene.settings.spellcheck' => 'Предложения альтернативного написания (показывать альтернативные поисковые термины)',
  'plugins.generic.lucene.settings.username' => 'Имя пользователя',
  'plugins.generic.lucene.settings.usernameInstructions' => 'Поисковый сервер Solr использует аутентификацию HTTP BASIC. Пожалуйста, введите имя пользователя.',
  'plugins.generic.lucene.settings.usernameRequired' => 'Пожалуйста, введите правильное имя пользователя для аутентификации поискового сервера Solr (двоеточия запрещены).',
  'plugins.generic.lucene.sectionForm.rankingBoost' => 'Пользовательский вес ранжирования',
  'plugins.generic.lucene.sectionForm.rankingBoostInstructions' => 'Плагин поиска Lucene/Solr позволяет вам изменять относительную важность статей в списке результатов
		поискового запроса. Настройка более высокого (или низкого) веса ранжирования не приведет к тому, что статьи из этого 
		раздела окажутся выше (или ниже) всех остальных статей. Однако, это приведет к тому, что эти статьи будут оказываться в результатах поиска выше (или ниже), чем если бы они оказались
		без выполнения этой настройки. Установка этого параметра в значение «Никогда не показывать» приведет к полному исключению статей
		этого раздела из результатов поиска.',
  'plugins.generic.lucene.sectionForm.rankingBoostInvalid' => 'Пожалуйста, введите правильный пользовательский вес ранжирования.',
  'plugins.generic.lucene.sectionForm.ranking.never' => 'Никогда не показывать',
  'plugins.generic.lucene.sectionForm.ranking.low' => 'Понизить ранг',
  'plugins.generic.lucene.sectionForm.ranking.normal' => 'Нормально',
  'plugins.generic.lucene.sectionForm.ranking.high' => 'Повысить ранг',
); ?>