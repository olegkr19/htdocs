<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function index(){
        return view('order');
    }
    public function store(Request $request)
    {
        $customer_name = $request->input('customer_name');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $id = $_GET['id'];
        DB::table('orders')->insert([
            ['customer_name' => $customer_name, 'phone' => $phone, 'city' => $city, 'product_id' => $id]
        ]);
        echo "Your order is accepted. We will call you back within 3 days to confirm the order. Thanks.<br/>";
        echo '<a href = "/">Click Here</a> to go back on home page.';
    }
}
