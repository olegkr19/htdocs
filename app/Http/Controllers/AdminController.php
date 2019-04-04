<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index()
    {
        return view('admin');
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $img_url = $request->input('img_url');
        $desc = $request->input('description');
        $price = $request->input('price');
        $model = $request->input('model');
        $cat = $request->input('category_id');
        DB::table('products')->insert([
            ['name' => $name, 'img_url' => $img_url, 'description' => $desc, 'price' => $price, 'model' => $model, 'category_id' => $cat]
        ]);
        echo "Product has been added.<br/>";
        echo '<a href = "/admin">Click Here</a> to go back.';
    }
}
