<?php return array (
  'plugins.generic.sword.displayName' => 'Плагин «SWORD»',
  'plugins.generic.sword.description' => 'Этот плагин позволяет управляющим журналами и (при необходимости) авторам передавать на хранение статьи по протоколу SWORD',
  'plugins.generic.sword.descriptionUnsupported' => 'Этот плагин позволяет управляющим журналами и (при необходимости) авторам передавать на хранение статьи по протоколу SWORD. Обратите внимание, что этот плагин требует PHP-расширения Zip, которое сейчас НЕ установлено.',
  'plugins.generic.sword.enabled' => 'Плагин «SWORD» был включен.',
  'plugins.generic.sword.settings' => 'Настройки',
  'plugins.generic.sword.settings.allowAuthorSpecify' => 'Разрешить авторам задавать точку хранения',
  'plugins.generic.sword.settings.depositPoints' => 'Точки хранения',
  'plugins.generic.sword.depositPoints.create' => 'Создать точку хранения',
  'plugins.generic.sword.depositPoints.edit' => 'Редактировать точку хранения',
  'plugins.generic.sword.depositPoints.type.automatic' => 'Автоматическая',
  'plugins.generic.sword.depositPoints.type.optionalSelection' => 'По желанию (гибкая)',
  'plugins.generic.sword.depositPoints.type.optionalFixed' => 'По желанию (фиксированная)',
  'plugins.generic.sword.depositPoints.type.manager' => 'Только управляющий',
  'plugins.generic.sword.depositPoints.type.description' => '<h4>Типы точек хранения:</h4>
<p><strong>Автоматическая</strong>: Передача на хранение производится автоматически. Указывается полная точка хранения SWORD. Должны быть указаны имя пользователя и пароль. Передача на хранение происходит после уведомления автора о приеме материала к публикации.<br/>
<strong>По желанию (гибкая)</strong>: Автор может выбрать передавать на хранение или нет. Заданный адрес (URL) показывает служебный документ и автор может выбрать из этого документа, какую точку хранения использовать. Передача на хранение происходит после уведомления автора о приеме материала к публикации.<br/>
<strong>По желанию (фиксированная)</strong>: Автор может выбрать передавать на хранение или нет. Адрес (URL) задает конкретную точку хранения SWORD. Передача на хранение происходит после уведомления автора о приеме материала к публикации.<br/>
<strong>Только управляющий</strong>: Эту точку хранения может использовать только управляющий журналом. Адрес (URL) показывает служебный документ. Передача на хранение выполняется вручную управляющим журнала, используя интерфейс импорта/экспорта в разделе «Управление журналом».
</p>',
  'plugins.generic.sword.depositPoints.password.description' => 'Если вы не укажите здесь пароль, вы и/или автор получат сообщение с просьбой ввести его при передача на хранение. Обратите внимание, что этот пароль будет видим для всех управляющих журналами и будет храниться в незашифрованном виде в базе данных.',
  'plugins.generic.sword.depositPoints.name' => 'Название',
  'plugins.generic.sword.automaticDepositComplete' => 'Материал «{$itemTitle}» был автоматически передан на хранение в репозиторий «{$repositoryName}».',
  'plugins.generic.sword.depositComplete' => 'Материал «{$itemTitle}» был передан на хранение в репозиторий «{$repositoryName}».',
  'plugins.generic.sword.authorDepositDescription' => '<p>При необходимости вы можете использовать следующую форму для передачи вашего материала «{$submissionTitle}» в один из перечисленных репозиториев. Используйте галочки в левой колонке для выбора тех репозиториев, в которые вы хотите передать вашу статью; каждый репозиторий может также дать вам возможность указать точку хранения, выбрав ее из раскрывающегося списка.</p>',
  'plugins.generic.sword.authorCustomDepositDescription' => '<p>При необходимости вы можете указать в следующей форме SWORD-совместимую точку хранения. Если хотите, пожалуйста, укажите адрес (URL) SWORD, имя пользователя и пароль для вашего репозитория и материал будет передан туда на хранение.</p>',
  'plugins.importexport.sword.displayName' => 'Плагин «Передача на хранение SWORD: Импорт/Экспорт»',
  'plugins.importexport.sword.description' => 'Этот плагин передает статьи на хранение в удаленные репозитории по протоколу передачи на хранение SWORD',
  'plugins.importexport.sword.deposit' => 'Передать на хранение',
  'plugins.importexport.sword.serviceDocUrl' => 'Адрес (URL) служебного документа',
  'plugins.importexport.sword.depositUrl' => 'Адрес (URL) точки хранения',
  'plugins.importexport.sword.depositPoint' => 'Точка хранения',
  'plugins.importexport.sword.depositPoint.addRemove' => 'Добавить/удалить',
  'plugins.importexport.sword.depositGalleys' => 'Передать на хранение гранки',
  'plugins.importexport.sword.depositEditorial' => 'Передать самый свежий редакционный файл',
  'plugins.importexport.sword.depositSuccessful' => 'Передача на хранение: успешно',
  'plugins.importexport.sword.depositSuccessfulDescription' => 'Выбранные элементы были переданы на хранение.',
  'plugins.importexport.sword.depositFailed' => 'Передача на хранение: неудача',
); ?>