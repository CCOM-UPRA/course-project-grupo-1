<?php
	class Account {

		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}

		public function login($email, $pw) {
			$query = mysqli_query($this->con, "SELECT * FROM user WHERE email='$email' AND password='$pw'");
			if(mysqli_num_rows($query) == 1) {
				return true;
			}
			else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}

		}

		public function register($fn, $ln, $em, $pw, $pw2, $birth, $phone){
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

		public function registerAddress($id, $address1, $address2, $city, $state, $zipcode){
			if(empty($this->errorArray)){
				return $this->insertUserAddress($id, $address1, $address2, $city, $state, $zipcode);
			}
			else{
				return false;
			}
		}
		public function addPayment($card_number,$secNumber,$expDate){
			$results = mysqli_query($this ->con, "INSERT INTO payment(  card_number, secNumber, expDate) VALUES('$card_number','$secNumber','$expDate')");
			return $results;
		}

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}



		private function insertUserDetails($fn, $ln, $em, $pw, $birth, $phone){
			
			$status= "active";
			$user_type = 0;
			//This query insert the user basic information to create an account.
			$results = mysqli_query($this->con, "INSERT INTO user(firstName, lastName, email, password, phoneNumber, birthdate, user_type, status) VALUES ('$fn', '$ln', '$em', '$pw', '$phone', '$birth', '$user_type', '$status')");
			return $results;
		}

		private function insertUserAddress($id, $address1, $address2, $city, $state, $zipcode){
			//This query insert a new address of a user.
			$results = mysqli_query($this->con, "INSERT INTO address(userID, street1, street2, postal_code, city, country, address_type) VALUES ('$id', '$address1', '$address2', '$zipcode', '$city', '$state', 0)");
			return $results;
		}

		public function updateAddress($id, $address1, $address2, $city, $state, $zipcode){
			//This query will update user Address
			$results = mysqli_query($this->con, "UPDATE address SET street1 = '$address1', street2 = '$address2', country = '$state', city = '$city', postal_code = '$zipcode' WHERE userID = '$id'");
			return $results;
		}
		public function updateUser($id, $firstName, $lastName, $email, $password, $phoneNumber, $birthdate){
			//This query will update user Address
			$results = mysqli_query($this->con, "UPDATE user SET firstName = '$firstName', lastName = '$lastName', email = '$email', password = '$password', phoneNumber = '$phoneNumber', birthdate = '$birthdate' WHERE userID = '$id'");
			return $results;
		}

		public function getID($email){
			//This query get the id of the user trying to logged in. Every email is unique.
			$query = mysqli_query($this->con, "SELECT userID FROM user WHERE email='$email'");
			$result = mysqli_fetch_array($query);
			return $result['userID'];
		}

		public function getRole($id){
			//This query select the role of the user recently logged in.
			$query = mysqli_query($this->con,"SELECT user_type FROM user WHERE userID='$id'");
			$result = mysqli_fetch_assoc($query);
			return $result['user_type'];
		}



		private function validateFirstName($fn) {
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, Constants::$firstNameCharacters);
				return;
			}
		}

		private function validateLastName($ln) {
			if(strlen($ln) > 25 || strlen($ln) < 2) {
				array_push($this->errorArray, Constants::$lastNameCharacters);
				return;
			}
		}

		private function validateEmails($em) {

			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM user WHERE email='$em'");
			if(mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, Constants::$emailTaken);
				return;
			}

		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordsDoNoMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
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


	}
?>