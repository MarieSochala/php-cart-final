<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller {

	public function getIndex(Request $request, Application $app){
		return view('cart/index', ['commandes' => 1]);
	}	

	public function postAdd(Request $request, Application $app){
		$product = Product::find($request->get('id'));
 		Cart::add($product->toArray());
 		Cart::count();
		return $app->redirect('/');
	}	

}