
        <?php
        
        $user = $_GET['username1'] ; 
        $pass = $_GET['password1']  ;  
        
 
   
 
     

  
 
  
  
  
  
          $con = mysqli_connect("localhost","root","","net");
         $sql = "SELECT * FROM `user` WHERE  `name` = '$user' && `pass`='$pass'"; 
         
          $q = mysqli_query($con,$sql); 
  $res = mysqli_fetch_assoc($q);
  
  if(!empty($res)){
  $_SESSION['user']=$res;
  //print_r($_SESSION['user'])  ; 
  echo 'ok'.";";
  echo $_SESSION['user']['name'].";"; 
  echo $_SESSION['user']['pass'].";"; 
  echo $_SESSION['user']['type'].";"; 
  echo $_SESSION['user']['id'].";"; 
   echo $_SESSION['user']['img']; 
  
  
  
  
 //header("LOCATION:../dashboard/prof_index.php");
}else{
  echo "email or password wrong"; 
//   echo "<script> myArray[1]  </script>"; 

}

        
        
        ?>