<?php
return array(
  'doctrine' => array(
    'connection' => array(
      'orm_default' => array(
        'driverClass' => 'Doctrine\DBAL\Driver\PDOSqlsrv\Driver',
        'params' => array(
          'host'     => '',
          'port'     => '1433',
          'user'     => '',
          'password' => '',
          'dbname'   => ''
        )
      )
    )
  ),
);