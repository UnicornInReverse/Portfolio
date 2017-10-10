<?php
//require_once 'vendor/sentry/sentry/lib/Raven/Autoloader.php';
Raven_Autoloader::register();
$client = new Raven_Client('https://97a2c4614d14476fb46a1e40788c29f4:75bdf84c37ff4a8881d4dd1c370a87c9@sentry.io/224812');
$error_handler = new Raven_ErrorHandler($client);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();
$error_handler->registerShutdownFunction();
