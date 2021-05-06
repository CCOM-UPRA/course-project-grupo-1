<?php
	class Account {
        
        private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}
    
        public function addToCart($valor) {
		
           
            $fotos =$_SESSION['photos'][$valor];
            $product=$_SESSION['product_name'][$valor];
            $price = $_SESSION['price'][$valor];
            $trailer = $_SESSION['trailer'][$valor];
            
            
        }

    
    
    
    
    }
