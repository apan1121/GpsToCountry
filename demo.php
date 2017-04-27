<?php
include_once("GpsMapper.php");

$gps = [];

$gps[] = [25,120];
$gps[] = [50,130];
$gps[] = [-25,-120];
$gps[] = [-59,-10];
$gps[] = [96,-10];
$gps[] = [0,0];
$gps[] = [-40,69];
$gps[] = [60,-69];
$gps[] = [-60,-69];
$gps[] = [-90,120];
$gps[] = [-90,-120];
$gps[] = [90,-120];
$gps[] = [90,120];


$gpsMapper = new GpsMapper();
foreach ($gps AS $_gps) {
    $result = $gpsMapper->detecteGPSLocation($_gps[0],$_gps[1]);
    print_r($result);
}

