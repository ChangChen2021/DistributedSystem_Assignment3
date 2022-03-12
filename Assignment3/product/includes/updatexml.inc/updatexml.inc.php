<?php 
//Written by Shuzheng Wang and slimmed by Chang Chen
// // Turn off all error reporting
// error_reporting(0);
session_start();
$userId =  $_SESSION['userId'];

include '../../classes/model.php';
$model= new Model();
$model->update($userId);