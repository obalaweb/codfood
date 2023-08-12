<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index () {
        $menus = Menu::paginate(12);

        $role = Role::where('name', '=', 'Admin')->first();
        $chefs = User::role($role)->take(4)->get();

        return view('shop.index', compact('menus', 'chefs'));
    }

    public function product (Menu $menu) {
        return view('shop.products', compact('menu'));
    }

    public function cart() {
        return view('shop.cart');
    }

    public function checkout () {
        return view('shop.checkout');
    }
}
