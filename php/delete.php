<?php
session_start(); 

$id=$_GET['id1'];


$con = mysqli_connect("localhost","root","","net");

$sql = "DELETE FROM `user` WHERE `id`='$id' "; 

$q =  mysqli_query($con,$sql); 

$res = mysqli_affected_rows($con);



if($res==1){
echo "ok" ; 


}else{

  echo "error" ; 

}



  
 
  





?>