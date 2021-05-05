<?php 

function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}
function sanitizeFormEmail($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}
function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormDate($inputText){
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

if(isset($_POST['register'])) {
    //Register button was pressed
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormEmail($_POST['email']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['cpassword']);
    $birthdate = sanitizeFormDate($_POST['birthdate']);
    $phone = $_POST['phone'];
    $wasSuccessful = $account->register($firstName,$lastName,$email,$password, $password2, $birthdate, $phone);
    if($wasSuccessful){
        $account->addCustomer($email);
        $id = $account->getID($email);
        $_SESSION['userLoggedIn'] = $id;
        header("Location: addaddress.php");
    }
}



//Ill put this function on register...

// function getInputValue($name){
//     if(isset($_POST[$name]))
//         echo $_POST[$name];
// }