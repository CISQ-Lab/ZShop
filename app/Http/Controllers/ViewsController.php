<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;
use App\Models\CompanyType;

class ViewsController extends Controller
{
    public function home()
    {
        $products = Product::where('is_active', true)->get();
        $categories = CompanyType::where('is_active', true)->inRandomOrder()->take(4)->get();
        return view('home', compact('products', 'categories'));
    }

    public function presentation($slug)
    {
        $company = Company::where('slug', $slug)->firstOrFail();
        return view('companies.presentation', compact('company'));
    }
}
