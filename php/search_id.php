<?php
  $id = $_GET['id1']  ; 



$con = mysqli_connect("localhost","root","","net");

$sql = "SELECT * FROM `user` where `id`='$id' "; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 

foreach($data as $pro):
   
echo $pro['name'].";" ; 
echo $pro['pass'].";" ; 
 echo $pro['id'].";" ; 
  echo $pro['img'] ; 
 
    
    
endforeach;
/*
foreach($tcp_con_state as $obj){

    
    
    echo $obj.";";
    echo $conn_local_addrs[$i].";";
    echo $conn_local_port[$i].";";
    echo $conn_remote_addrs[$i].";";
echo $conn_remote_port[$i].";" ; 

}*/



  
 
  





?>