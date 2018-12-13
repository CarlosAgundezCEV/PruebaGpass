<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::all();

    	return response()->json([
    		"message" => "successful",
    		"data" => $categories

    	]);

    }

    public function store(Request $request)
    {

    	$categoryName = $request->name;
    	Category::create([
    		'name' => $categoryName
    	]);

    	return response()->json([
    		'message' => 'Category created correctly'

    	]);
    }

}
