<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;

class WelcomeController extends Controller
{
    private $categories;
    private $products;
    public function __construct(Category $category)
    {
        $this->middleware('guest');
        $this->categories = $category;
    }

    public function index()
    {
        //return view('welcome');
    }
    public function exemplo()
    {
        $categories = $this->categories->all();
        return view('exemplo', compact('categories'));
    }
}
