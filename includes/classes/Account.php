<?php

class Account {

    private $con;
    private $errorArray;

    public function __construct($con){
        $this->con = $con;
        $this->errorArray = array();
    }

    public function register($fn, $ln, $em, $pw, $pw2, birth, $phone){
        $this->validateFirstname($fn);
        $this->validateLastname($ln);
        $this->validateEmails($em);
        $this->validatePasswords($pw, $pw2);
        $this->validateBirthDate($birth);
        if(empty($this->errorArray)){
            //Insert into database
            return $this->insertUserDetails($fn, $ln, $em, $pw, $birth, $phone);
        }
        else{
            return false;
        }
    }

    public function registerAddress($id, $street1, $street2, $city, $state, $zipcode){
        $this->validateCity($city);
        $this->validateState($state);
        $this->validateZipCode($zipcode);
        if(empty($this->errorArray)){
            return $this->insertUserAddress($id, $address1, $address2, $city, $state, $zipcode);
        }
        else{
            return false;
        }
    }



    //Insert Data Functions

    private function insertUserDetails($fn, $ln, $em, $pw, $birth, $phone){
        $date = date("Y-m-d");
        $status = 1;
        $role = 1;
        //This query insert the user basic information to create an account.
        $results = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$fn', '$ln', '$birth', '$em', '$pw', '$phone', '$status', '$role', '$date')");
        return $results;
    }

    private function insertUserAddress($id, $address1, $address2, $city, $state, $zipcode){
        //This query insert a new address of a user.
        $results = mysqli_query($this->con, "INSERT INTO address VALUES ('', '$id', '$address1', '$address2', '$city', '$state', '$zipcode')");
        return $results;
    }







    //Validate Functions

    private function validateFirstName($fn){
        if(strlen($fn) > 25 || strlen($fn) < 2) {
            array_push($this->errorArray, Constants::$firstNameCharacters);
            return;
        }
    }

    private function validateLastName($ln){
        if(strlen($ln) > 25 || strlen($ln) < 2) {
            array_push($this->errorArray, Constants::$lastNameCharacters);
            return;
        }
    }

    private function validateEmails($em){

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray, Constants::$emailInvalid);
            return;
        }
        //This query verify if the email used on register hasn't been used.
        $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
        if(mysqli_num_rows($checkEmailQuery) != 0){
            array_push($this->errorArray, Constants::$emailTaken);
            return;
        }
    }

    private function validatePasswords($pw, $pw2){
        if($pw != $pw2){
            array_push($this->errorArray, Constants::$passwordsDoNoMatch);
            return;
        }

        if(preg_match('/[^A-Za-z0-9]/', $pw)){
            array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
            return;
        }

        if(strlen($pw) > 30 || strlen($pw) < 5) {
            array_push($this->errorArray, Constants::$passwordCharacters);
            return;
        }
    }
    private function validateBirthDate($birth){
        $age = date_diff(date_create($birth), date_create('today'))->y;
        if($age < 18){
            array_push($this->errorArray, Constants::$minor);
        }
        else if($age > 129){
            array_push($this->errorArray, Constants::$overAge);
        }
        else if($age == null){
            array_push($this->errorArray, Constants::$nullAge);
        }
        return;
    }
    private function validateCity($city){
        if(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $city)){
            array_push($this->errorArray, Constants::$numOnCity);
        }
        return;
    }
    private function validateState($state){
        if(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $state)){
            array_push($this->errorArray, Constants::$numOnState);
        }
        return;
    }
    private function validateZipCode($zipcode){
        if(!is_numeric($zipcode)){
            array_push($this->errorArray, Constants::$lettersOnZipCode);
        }
        return;
    }

}