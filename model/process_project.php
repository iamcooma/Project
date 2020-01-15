<?php
error_reporting(0);
include('../database/condb.php');
session_start();
$user_id = $_SESSION['id'];
$project_title = $_POST['project_title'];
$project_detail = $_POST['project_detail'];
$project_pic = $_FILES["project_pic"]["tmp_name"];
$project_move = "../img/" . $_FILES["project_pic"]["name"];
$project_manager =$_POST['project_manager'];
$account_number =$_POST['account_number'];

$project_date = $_POST['project_date'];
$account_name = $_POST['account_name'];
$account_bank = $_POST['account_bank'];

if(isset($_POST['project_money2'])){
	$project_money = $_POST['project_money2'];
}else{
	$project_money = $_POST['project_money'];
}
if (move_uploaded_file($project_pic, $project_move)) {
$sql = "INSERT INTO `project`(`user_id`,`project_title`, `project_detail`, `project_pic`, `project_date`, `project_manager`, `project_money`, `account_number`,`account_name`,`account_bank`)
                    VALUES ('$user_id','$project_title', '$project_detail', '$project_pic', '$project_date', '$project_manager', '$project_money', '$account_number','$account_name','$account_bank')";

$result = mysqli_query($conn,$sql);
if($result){
    header("location:../view/donatetion.php");
    }
    else{
    echo "  alert('Error back to register again');";
}

}
