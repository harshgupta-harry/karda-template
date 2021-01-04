<?php 
include ('./config-file.php');
include ('./composer/firebase_db.php');
//template data fetch from firebase
// $data = $database->getReference('template/userData')->getValue();
 
include 'header.php';
include './components/tiles/tiles.php';
include './components/featured/featured.php';
include './components/location/location.php';
include './components/aboutus/aboutus.php';
include './components/stats/stats.php';
include './components/testimonials/testimonials.php';
include './components/news/news.php';
include 'footer.php';
?>