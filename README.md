# livro_servico


1) application->autoload
antes:
$autoload['libraries'] = array();
depois:
$autoload['libraries'] = array('database');


2)application->database

antes:
'hostname' => 'localhost',
'username' => '',
'password' => '',
'database' => '',

depois:
'hostname' => 'localhost',
'username' => 'root',
'password' => 'root',
'database' => 'servico',
