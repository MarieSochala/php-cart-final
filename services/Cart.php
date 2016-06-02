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
		return count(self::get());
	}
	public function total(){
		$products=self::get();
		$prix= array();
		foreach ($products as $product) {
			array_push($prix, $product->price);
		}
		return array_sum($prix);
	}
}