<?php 
    include('../database/condb.php');

    $kru_name = $_POST['kru_name'];
    $kru_lastname = $_POST['kru_lastname'];
    $kru_address = $_POST['kru_address'];
    $kru_email = $_POST['kru_email'];
    $kru_phone = $_POST['kru_phone'];
    // $kru_img = $_POST['kru_img'];
    $kru_school = $_POST['kru_school'];
    
    // echo "$kru_name,$kru_lastname,$kru_address,$kru_email,$kru_phone,$kru_school";

    $sql = "INSERT INTO `kru`(`kru_id`,`kru_name`, `kru_lastname`, `kru_address`, `kru_email`, `kru_phone`, `kru_school`) 
                    VALUES ('','$kru_name' ,'$kru_lastname' ,'$kru_address' ,'$kru_email' ,'$kru_phone' ,'$kru_school')";
    echo "$sql";                   
     $result = mysqli_query($conn,$sql);
    
    if($result){
   header("location: ../view/kru_profile.php");
   }
   else{
    echo "  alert('Error back to register again');";
 }
?>