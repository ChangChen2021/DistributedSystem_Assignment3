<?php
    // Written by Chang Chen
    // Turn off all error reporting
    error_reporting(0);
    require "../login/includes/dbh.inc.php";
    $userId = $_GET['id'];
    //get user email from table users
    $emailQuery = mysqli_query($conn, "SELECT * FROM users WHERE usersId =$userId");
    foreach($emailQuery as $info){
        $email= $info['usersEmail'];
    }
    //get user info from table peopleinformation
    $result = mysqli_query($conn, "SELECT * FROM peopleInformation WHERE id =$userId");
    foreach ($result as $information){
        $name= $information['name'];
        $image= $information['image'];
        $position= $information['position'];
        $degree= $information['degree'];
        $phone= $information['phone'];
        $description= $information['description'];
        $birthday= $information['birthday'];
    }