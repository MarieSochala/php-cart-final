<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller {

	public function getIndex(Request $request, Application $app){
		return view('cart/index', ['products' => Cart::get()]);
	}	

	public function postAdd(Request $request, Application $app){
		$product = Product::find($request->get('id'));
 		Cart::add($product->toArray());
 		Cart::count();
 		Cart::total();
		return $app->redirect('/');
	}	

	public function getFinalCom(Request $request, Application $app){
		return view('cart/finalcom', ['products' => Cart::get()]);
	}

	public function postCom(Request $request, Application $app){
		return view('cart/commande', ['products' => Cart::get()]);
	}

}