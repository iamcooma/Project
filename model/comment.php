<?php

include('../database/condb.php');

    $com_text = $_POST['com_text'];
    $user_id = $_POST['user_id'];
    $com_status = "0";
    $sql = "INSERT INTO `comment` (`com_text`, `user_id`, `anw_com`, `com_status`) 
    VALUES ('$com_text','$user_id', '', '$com_status')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: ../view/comment.php");
    } else {
        echo "  alert('Error back to register again');";
    }
?>
