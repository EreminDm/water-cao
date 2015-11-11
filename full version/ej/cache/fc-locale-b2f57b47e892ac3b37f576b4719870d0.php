<?php return array (
  'plugins.reports.timedView.displayName' => 'Плагин «Отчет о просмотрах за период»',
  'plugins.reports.timedView.description' => 'Этот плагин реализует отчет в формате CSV, описывающий читательский интерес к каждой статье за указанный пользователем период времени.',
  'plugins.reports.timedView.form.dateStartRequired' => 'Дата начала обязательна.',
  'plugins.reports.timedView.form.dateStartValid' => 'Пожалуйста, выберите правильную дату начала.',
  'plugins.reports.timedView.form.dateEndRequired' => 'Дата окончания обязательна.',
  'plugins.reports.timedView.form.dateEndValid' => 'Пожалуйста, выберите правильную дату окончания.',
  'plugins.reports.timedView.form.generate' => 'Генерировать отчет',
  'plugins.reports.timedView.form.clearLogs' => 'Очистить журналы',
  'plugins.reports.timedView.form.clearLogs.description' => 'Выберите дату для удаления записей из журналов. Все записи журналов, сделанные до указанной даты, будут удалены. Обратите внимание, что это влияет только на плагин «Отчет о просмотрах за период» и не учитывает статистику, которая ведется в другом месте (например, в плагине «Отчет о просмотрах»).',
  'plugins.reports.timedView.form.clearLogs.confirm' => 'Вы уверены, что хотите удалить эти записи? Это действие нельзя отменить.',
  'plugins.reports.timedView.form.useTimedViewRecords' => 'Поставьте галочку для использования статистики, получаемой старым плагином «Отчет о просмотрах за период». Если вы хотите сгенерировать отчет за период времени с новыми статистическими данными, не ставьте эту галочку.',
  'plugins.reports.timedView.form.largeSetOfDataIssue' => 'При выборе большого периода времени с большим количеством статистических данных формирование данного отчета может занять  продолжительное время. Если оно займет слишком много времени, то соединение может быть прервано сервером по таймауту и вы не получите файл с отчетом. Если такое произошло, попробуйте сформировать отчет снова, задав более короткий период времени.',
  'plugins.reports.timedView.report.articleId' => 'ID статьи',
  'plugins.reports.timedView.report.articleTitle' => 'Заголовок статьи',
  'plugins.reports.timedView.report.datePublished' => 'Дата опубликования',
  'plugins.reports.timedView.report.abstractViews' => 'Просмотры аннотации',
  'plugins.reports.timedView.report.galleyViews' => 'Все просмотры гранок',
); ?>