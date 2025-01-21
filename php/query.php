<?php 
include ('dbcon.php');




$userName = $userEmail = $userPassword = $userconfirmPassword ='';
$userNameErr = $userEmailErr = $userPasswordErr = $userConfirmPassword =''; 

//register

//if(isset ($POST[adduser]) ){
   // $userName =  $_POST['uName'];  
  //  $userEmail =  $_POST['uEmail'];  
  //  $userPassword =  $_POST['uPassword'];  
  //  $userconfirmPassword =  $_POST['uConfirmPassword']; 
  //  if(empty($userName)) {
 //       $userNameErr = 'Name is required' ;
 //   }

  //  if(empty($userEmail)) {
  //      $userEmailErr = 'Email is required' ;
  //  }

 //    if(empty($userPassword)) {
  //      $userPasswordErr = 'Password is required' ;
  //  }
  //  if(empty($userName)) {
    //    $userConfrimPasswordErr = 'Confrim Password is required' ;
   // }
  //  if(empty($userNameErr) && empty($userNameErr) && empty($userNameErr) &&empty($userNameErr)  ){
       
  //  }
                  
//} 
// login
if(isset ($POST[userlogin]) ){
    $userEmail =  $_POST['uEmail'];  
    $userPassword =  $_POST['uPassword'];  
if(empty($userEmail)){
   
             $userEmailErr = 'Email is required' ;
         }

         if(empty($userPassword)) {
            $userPasswordErr = 'Password is required' ;
        }
        if(empty($userEmailErr) && empty ($userPasswordErr)){
            $query=$pdo->prepare("select * from users where email =: uEmail");
            $query->bindparam('uEmail',$userEmail);
           $query ->execute();
           $user =$query->FETCH(PDO::FETCH_assoc );
           print_r($user);
           if($user){
            if($userPassword==$user['password']){
                echo "<script>location.assign('login.php?success=userlogin')</script>";
                
            }
            else("<script>location.assign('login.php?error=userlogin')</script>");
           } 
        }
    }
    

?>