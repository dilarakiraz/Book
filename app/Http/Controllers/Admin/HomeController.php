<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //return view('admin.index');
        $datalist=Category::with('children')->get();
        return view('admin.category', ['datalist' => $datalist]);
    }
}
