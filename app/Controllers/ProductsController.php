<?php namespace app\Controllers;

use app\Http\Requests;
use app\Controllers\Controller;
use app\Models\Product;
use app\Models\Brand;

use Illuminate\Http\Request;

class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$data['products'] = Product::all();
		return \View::make('products.index',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$data['brands'] = Brand::all();
		return \View::make('products.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postStore()
	{
		$product = new Product;
		$product->name = $_REQUEST['name'];
		$product->brand_id = $_REQUEST['brand_id'];
		$product->save();
		return \Redirect::to('products');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}