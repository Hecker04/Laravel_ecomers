<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Distributor;
use App\Models\Flashsale;


class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $users = User::count();
        $distributors = distributor::count();
        $flashsales = FlashSale::count();
        ;

        return view('pages.admin.index', compact('products', 'users', 'distributors', 'flashsales'));

    }
}