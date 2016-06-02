<?php

class Cart {
	public static function get() {
		if(isset($_SESSION['cart'])){
			return json_decode($_SESSION['cart']);
			}
		 return [];
	}
	public static function add($product) {
		if(isset($_SESSION['cart'])){
			$commande=json_decode($_SESSION['cart']);
		}
		else {
			$commande= array();
		}
		array_push($commande, $product); 
		$_SESSION['cart']=json_encode($commande);
	}

	public function count(){
		
	}
	public function total(){
	}
}