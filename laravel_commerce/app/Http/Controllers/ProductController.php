<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;

class ProductController extends Controller
{
    private $products;
    public function __construct(Product $product)
    {
        $this->middleware('guest');
        $this->products = $product;
    }

    public function index()
    {
        $products = $this->products->all();

        return view('produtos', compact('products'));
    }
}
