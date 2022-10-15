<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once 'vendor/autoload.php';

/*
use app\Email;
use app\Person;

$email = new Email();
$email = new Email();
$person = new Person();
*/

/*
require_once './app/Email.php';
require_once './app/Person.php';
*/

// create a log channel
$log = new Logger('조상호');
$log->pushHandler(new StreamHandler('output.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
