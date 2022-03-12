<?php
//Written by Chang Chen and Shuzheng Wang
//check whether the profile has been created
session_start();
$userId = $_SESSION['userId'];
include '../../classes/model.php';
$model= new Model();
$model->insert($userId);
