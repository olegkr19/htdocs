<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function watches()
    {
        $products = Product::query()->where('category_id', 'like', 1)->paginate(12);
        return view('watches', compact('products'));
    }

    public function clocks()
    {
        $products = Product::query()->where('category_id', 'like', 2)->paginate(9);
        return view('clocks', compact('products'));
    }

    public function tissot()
    {
        $products = Product::query()->where('name', 'like', 'TISSOT')->paginate(9);
        return view('watches', compact('products'));
    }

    public function breitling()
    {
        $products = Product::query()->where('name', 'like', 'Breitling')->paginate(9);
        return view('watches', compact('products'));
    }

    public function omega()
    {
        $products = Product::query()->where('name', 'like', 'Omega')->paginate(9);
        return view('watches', compact('products'));
    }

    public function mathey_tissot()
    {
        $products = Product::query()->where('name', 'like', 'Mathey-Tissot')->paginate(9);
        return view('watches', compact('products'));
    }

    public function hermle()
    {
        $products = Product::query()->where('name', 'like', 'Hermle')->paginate(9);
        return view('clocks', compact('products'));
    }

    public function hilser()
    {
        $products = Product::query()->where('name', 'like', 'Hilser')->paginate(9);
        return view('clocks', compact('products'));
    }

    public function desktop()
    {
        $products = Product::query()->where('category_id', 'like', 2)->paginate(9);
        return view('clocks', compact('products'));
    }

    public function search()
    {
        $page = $_GET['page'] = true;
        $search_text = htmlspecialchars(trim($_GET['text']));
        for ($i = 1; $i < 100; $i++) {
            $data = Product::query()->where('name', 'LIKE', '%' . $page[$i] . $search_text . '%')->paginate(9);
        }
            $data->setPath('search?text=' . $search_text);

            return view('search', compact('data'));
        }
    }

