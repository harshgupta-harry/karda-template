<?php
include ('./composer/firebase_db.php');
	
//template data fetch from firebase
$data = $database->getReference('template/userData')->getValue();
	
//image directories
$imagesDirectory = 'https://api.onitt.co/onitt/files/media-manager/';

?>