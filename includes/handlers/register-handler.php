<?php 



if(isset($_POST['register'])){

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2 = $_POST['password2'];
$phoneNumber = $_POST['phone'];
$birth = $_POST['birthdate'];

$wasSuccessfull = $account->register($firstName, $lastName, $email, $password, $password2, $birth, $phoneNumber);

if($wasSuccessfull){
    $id = $account->getID($email);
    $_SESSION['userLoggedIn'] = $id;
    header("Location: addAddress.php");
    echo "<script> alert('You are registered');</script>";
}

    // if($password==$password2)
    // {
    //     $sql = "INSERT INTO user(firstName, lastName, birthdate, email, password, phoneNumber) VALUES('$firstName','$lastName','$birth','$email','$password','$phoneNumber')";
    //     $connect->query($sql);
    //     $wasSuccessfull = true;

    //     echo "<script> alert('You are registered');
        
    //     </script>";
        


    // }else{
    //     echo "<script> alert('Password did not match');
    //     window.location.href='sign_up.php';
    //     </script>";
    // }


    // if($wasSuccessfull){
    //     header("Location:index.php");

    // }

}
?>