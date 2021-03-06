<?php return array (
  'plugins.generic.xmlGalley.displayName' => 'Плагин «XML-гранки»',
  'plugins.generic.xmlGalley.description' => 'Этот плагин генерирует XHTML-гранки из статьи в формате XML, используя XSLT.',
  'plugins.generic.xmlGalley.manager.settings' => 'Настройки',
  'plugins.generic.xmlGalley.settings.description' => '<p>Использование этого плагина позволяет автоматически генерировать гранки статьи из исходного XML-файла,загруженного на сервер, используя указанное стилевое преобразование XSL.</p>',
  'plugins.generic.xmlGalley.settings.renderer' => 'Метод преобразования XSLT',
  'plugins.generic.xmlGalley.settings.PHP5' => 'PHP 5.0.0+ с функциями XSL (libxslt)',
  'plugins.generic.xmlGalley.settings.PHP4' => 'PHP 4.0.3+ с функциями XSLT (Sablotron)',
  'plugins.generic.xmlGalley.settings.notAvailable' => 'Недоступно',
  'plugins.generic.xmlGalley.settings.externalXSLT' => 'Внешний преобразователь XSLT, работающий в режиме командной строки (например, Xalan)',
  'plugins.generic.xmlGalley.settings.externalXSLTDescription' => 'Введите полный путь к утилите преобразования XSLT, включая все требуемые аргументы.  Используйте %xsl для подстановки размещения стилевого файла XSL и %xml для подстановки размещения исходного XML-файла; например, <br/><pre>/usr/bin/java -jar ~/java/xalan.jar -HTML -IN %xml -XSL %xsl</pre>',
  'plugins.generic.xmlGalley.settings.externalXSLTTest' => 'Проверить XSLT',
  'plugins.generic.xmlGalley.settings.externalXSLTSuccess' => 'Тест внешнего XSLT прошел успешно.',
  'plugins.generic.xmlGalley.settings.externalXSLTFailure' => 'Тест внешнего XSLT завершился с ошибкой.',
  'plugins.generic.xmlGalley.settings.externalXSLTRequired' => 'Необходимо указать внешний преобразователь XSLT, работающий в режиме командной строки.',
  'plugins.generic.xmlGalley.settings.stylesheet' => 'Стилевая таблица XSL',
  'plugins.generic.xmlGalley.settings.xslNLM' => '<a href="http://dtd.nlm.nih.gov/publishing/">NLM Journal Publishing DTD</a> &rarr; XHTML',
  'plugins.generic.xmlGalley.settings.xslFOP' => 'Включить генерацию PDF-гранок с использованием XSL-FO (например, FOP)',
  'plugins.generic.xmlGalley.settings.xslFOPDescription' => 'Введите полный путь к процессору FO, включая все требуемые аргументы.  Используйте %fo для подстановки размещения файла XSL-FO и %pdf для подстановки размещения PDF-файла; например, <br/><pre>/usr/sbin/fop -fo %fo -pdf %pdf</pre>',
  'plugins.generic.xmlGalley.settings.xslFOPRequired' => 'Необходимо указать внешний процессор FO, работающий в режиме командной строки.',
  'plugins.generic.xmlGalley.settings.customXSL' => 'Пользовательская таблица стилей XSL',
  'plugins.generic.xmlGalley.settings.customXSLRequired' => 'Необходимо указать файл пользовательской таблицы стилей XSL.',
  'plugins.generic.xmlGalley.settings.customXSLInvalid' => 'Загруженный файл XSL имеет неверный формат. Пожалуйста, проверьте файл и попробуйте снова.',
); ?>