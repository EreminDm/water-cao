<?php return array (
  'plugins.auth.ldap.displayName' => 'LDAP',
  'plugins.auth.ldap.description' => 'Этот плагин позволяет выполнять аутентификацию и синхронизацию учетных записей пользователей с внешним источником данных LDAP.',
  'plugins.auth.ldap.settings' => 'Настройки LDAP',
  'plugins.auth.ldap.settings.hostname' => 'Имя сервера',
  'plugins.auth.ldap.settings.hostname.description' => 'Например, «ldap.example.com» или «ldaps://ldap.example.com» (чтобы использовать SSL)',
  'plugins.auth.ldap.settings.port' => 'Порт сервера',
  'plugins.auth.ldap.settings.port.description' => 'Необязателен. По умолчанию 389 (LDAP) или 636 (LDAP по SSL)',
  'plugins.auth.ldap.settings.basedn' => 'База поиска (Base DN)',
  'plugins.auth.ldap.settings.basedn.description' => 'Например, «ou=people,dc=example,dc=com»',
  'plugins.auth.ldap.settings.managerdn' => 'DN менеджера',
  'plugins.auth.ldap.settings.managerdn.description' => 'Например, «cn=Manager,dc=example,dc=com»',
  'plugins.auth.ldap.settings.managerpwd' => 'Пароль менеджера',
  'plugins.auth.ldap.settings.managerpwd.description' => 'DN и пароль менеджера нужны только в случае, если включена возможность синхронизации паролей/учетных записей или создания пользователей. Если LDAP будет использоваться только для аутентификации, то эти настройки можно опустить.',
  'plugins.auth.ldap.settings.uid' => 'Атрибут с именем пользователя',
  'plugins.auth.ldap.settings.uid.description' => 'Атрибут, значение которого уникально определяет объект пользователя, такой как uid, cn или sAMAccountName.',
  'plugins.auth.ldap.settings.pwhash' => 'Шифрование пароля',
  'plugins.auth.ldap.settings.pwhash.description' => 'Формат хэша для паролей, хранимых на сервере. Рекомендуется SSHA (требует PHP >= 4.3.0).',
  'plugins.auth.ldap.settings.saslopt' => 'Настройки SASL (необязательно)',
  'plugins.auth.ldap.settings.sasl' => 'Использовать SASL вместо простой аутентификации (требует PHP >= 5)',
  'plugins.auth.ldap.settings.saslmech' => 'Механизм SASL',
  'plugins.auth.ldap.settings.saslmech.description' => 'Например, «DIGEST-MD5»',
  'plugins.auth.ldap.settings.saslrealm' => 'Область',
  'plugins.auth.ldap.settings.saslauthzid' => 'Запрашиваемый authorization ID',
  'plugins.auth.ldap.settings.saslprop' => 'Настройки безопасности SASL',
); ?>