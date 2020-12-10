<?php
require __DIR__ .'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/karda-backend-firebase-adminsdk-eg51y-bef513d3f4.json');

$firebase = (new Factory)
	->withServiceAccount($serviceAccount)
	->withDatabaseUri('https://karda-backend.firebaseio.com/')
	->create();
$database = $firebase->getDatabase();
?>