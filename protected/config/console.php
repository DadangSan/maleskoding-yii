<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Console Application',
    // application components
    'components' => array(
	'db' => array(
	    'connectionString' => 'mysql:host=localhost;dbname=maleskoding',
	    'emulatePrepare' => true,
	    'username' => 'maleskoding',
	    'password' => 'maleskoding',
	    'charset' => 'utf8',
	),
    ),
);