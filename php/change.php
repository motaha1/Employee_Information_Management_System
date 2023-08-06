<?php
session_start(); 

        $user = $_GET['username1'] ; 
        $pass = $_GET['password1']  ;  
        $id = $_GET['id1']  ; 




$con = mysqli_connect("localhost","root","","net");
/*
$sql = "SELECT * FROM `user` where `name` = '$user'"; 

$q =  mysqli_query($con,$sql); 

$res= mysqli_fetch_assoc($q);

 
$data = $res; 





if(isset($_POST['mark'])){

 
 
  
  $id = $_SESSION['user']['id'];
  $stu_id = $data['id'];
  $c_id=$data['couse_id'];
  $mark_name = $data['mark_name']; 

  $mark= $_POST['mark'];


*/




    
  $sql1 = "UPDATE `user` SET `name`='$user' ,`pass`='$pass' , `id` = '$id' WHERE `id`='$id'"; 
  
  mysqli_query($con,$sql1); 
  
  $res1 = mysqli_affected_rows($con); 
  
  if ( $res1== 1){
   echo " its change ! " ; 
    //$sql2 = "DELETE FROM `marks` WHERE `id`='$idd' "; 

   // $q2 =  mysqli_query($con,$sql2); 
    
   // $res2 = mysqli_affected_rows($con);
  
  
  }else{
      echo "error"; die;
  }
 

  

  


  





?>
