<?php




$con = mysqli_connect("localhost","root","","net");

$sql = "SELECT * FROM `user` where `type`='employee' "; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 

foreach($data as $pro):
   echo $pro['id'].";" ; 
echo $pro['name'].";" ; 
echo $pro['pass'].";" ; 
    
    
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