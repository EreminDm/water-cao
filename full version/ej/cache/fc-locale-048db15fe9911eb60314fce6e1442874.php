<?php return array (
  'plugins.generic.backup.name' => 'Плагин «Резервное копирование»',
  'plugins.generic.backup.description' => 'Этот плагин генерирует резервную копию установленной системы.',
  'plugins.generic.backup.link' => 'Скачать резервную копию',
  'plugins.generic.backup.longdescription' => '<p>Следующие ссылки позволяют администратору сайта скачать полную резервную копию различных компонент установленной системы. Полная резервная копия включает в себя <strong>все</strong> следующие компоненты. Пожалуйста, обратитесь к технической документации для получения более подробной информации о том, как эти компоненты взаимосвязаны.</p>',
  'plugins.generic.backup.db' => 'База данных',
  'plugins.generic.backup.files' => 'Файлы',
  'plugins.generic.backup.code' => 'Код',
  'plugins.generic.backup.db.config' => '{$footNoteNum}. <strong>ВНИМАНИЕ:</strong> Инструмент создания дампа базы данных не был сконфигурирован в конфигурационном файле config.inc.php. Настройка будет зависеть от настройки вашего сервера и типа используемой вами базы данных. Она должна быть указана в секции [cli], в параметре dump. Для MySQL используйте инструмент mysqldump, то есть:<br/>
<pre>[cli]
dump = "/usr/bin/mysqldump -h %s -u %s -p%s %s"
</pre>
Ключи «%s» будут заменены в следующем порядке:<ol>
	<li>Хост сервера базы данных</li>
	<li>Имя пользователя базы данных</li>
	<li>Пароль пользователя базы данных</li>
	<li>Имя базы данных</li>
</ol>
Обратите внимание, что эта возможность требует указания пароля пользователя базы данных в командной строке, что может быть проблемой безопасности.<br/><br/>',
  'plugins.generic.backup.tar.config' => '{$footNoteNum}. <strong>ВНИМАНИЕ:</strong> Инструмент tar не был сконфигурирован в конфигурационном файле config.inc.php. Настройка будет зависеть от настройки вашего сервера. Она должна быть указана в секции [cli], в параметре tar, задавая путь к утилите tar, то есть:<br/>
<pre>[cli]
tar = "/bin/tar"
</pre><br/>',
  'plugins.generic.backup.failure' => '<strong>ВНИМАНИЕ: </strong>В процессе создания резервной копии могла произойти ошибка. Наиболее вероятная причина — отстутствие разрешений на доступ к файлам.',
); ?>