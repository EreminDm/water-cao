<?php return array (
  'plugins.generic.usageStats.settings.logging' => 'Access log options',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Create log files',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Activating this option will make the plugin create access log files inside the files directory. Those files should be used to extract the usage statistics data. If you don\'t want to create more access log files you can leave this option disabled and use your own server log access files.',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Parse log files regex',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'The default regex used can parse apache access log files in combined format and also the plugin\'s log files. If your access log files are in a different format you will have to insert a regex capable of parsing them and giving the expected values. See UsageStatsLoader::_getDataFromLogEntry() for more information.',
  'plugins.generic.usageStats.settings.saved' => 'Usage statistics plugin settings saved',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Usage statistics file loader task',
  'plugins.generic.usageStats.openFileFailed' => 'Usage statistics plugin is disabled. No log files processed.',
  'plugins.generic.usageStats.invalidLogEntry' => 'The line number {$lineNumber} from the file {$file} is not a valid log entry and the file was rejected.',
  'plugins.generic.usageStats.removeUrlError' => 'The line number {$lineNumber} from the file {$file} contains an url that the system can\'t remove the base url from.',
  'plugins.generic.usageStats.loadDataError' => 'Couldn\'t load data extracted from file {$file}. The error was: {$error}. The file was moved to stage again.',
  'plugins.generic.usageStats.displayName' => 'Usage Statistics',
  'plugins.generic.usageStats.description' => 'Present data objects usage statistics. Can use server access log files to extract statistics.',
  'plugins.reports.usageStats.report.displayName' => 'OJS usage statistics report',
  'plugins.reports.usageStats.report.description' => 'OJS default usage statistics report (COUNTER ready)',
  'plugins.reports.usageStats.metricType' => 'OJS/COUNTER',
  'plugins.reports.usageStats.metricType.full' => 'Open Journal Systems statistics (COUNTER ready)',
); ?>