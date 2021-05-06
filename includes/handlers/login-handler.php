<?php 


if(isset($_POST['login'])){
    //Login button was pressed
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $results = $account->login($email, $password);
    
    if($results == true) {
        $id = $account->getID($email);
        $role = $account->getRole($id);
        if ($role == "0") {
            $_SESSION['userLoggedIn'] = $id;
            header("Location: index.php");
        } else {
            $_SESSION['adminLoggedIn'] = $id;
             header("Location: admin/adminindex.php ");
        }
    }else{
        echo "<script> alert('Credentials are wrong');     window.location.href='login.php';     </script>"; 
              
    }        
}
































// if(isset($_POST['login'])){
    
//     $user_ad= 1;
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $sql=("SELECT * from user Where email ='$email' AND password='$password'");
//     $results=$connect->query($sql);
//     $final=$results->fetch_assoc();
//     $_SESSION['email']=$final['email'];
//     $_SESSION['password']=$final['password'];
//     $_SESSION['userName']=$final['firstName'];
//     $_SESSION['lastName']=$final['lastName'];
//     $_SESSION['id']=$final["userID"];
//     $_SESSION['phone']=$final['phoneNumber'];
//     $_SESSION['loggedin'] = false;
    
//     if($email=$final['email'] AND $password = $final['password']){
        
//         if($user_ad = $final['user_admin']){
            
//             echo "<script> alert('Credentials are right');     window.location.href='admin/adminindex.php';     </script>";
            
            
//         }
//         else{
//                 echo "<script> alert('Credentials are right');     window.location.href='index.php';     </script>";
               
//                 $_SESSION['loggedin'] = true;
//             }
        
//         }

//     else{
//         echo "<script> alert('Credentials are wrong');     window.location.href='login.php';     </script>"; 
      
//     }        

// }

?>