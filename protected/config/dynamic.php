<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=128.199.18.39;port=3306;dbname=humhub',
      'username' => 'humhub',
      'password' => 'humhub',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'dsn' => 'native://default',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => '128.199.18.39',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1742113123,
    'horImageScrollOnMobile' => 1,
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'HumHub',
); ?>