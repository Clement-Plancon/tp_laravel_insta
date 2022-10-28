<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index(){
        
        return view('pages.index');
    }
    public function catalog(){
        $products = DB::table('products')
                    ->orderBy('product_name', 'asc')
                    ->get();
        return view('pages.catalog')->with('products', $products);
    }
    public function register(){
        return view('pages.register');
    }
    public function login(){
        return view('pages.login');
    }
    public function profil(){
        return view('pages.profil');
    }

    /* MODELS */
    public function registerUser_action(){
        return view('models.registerUser_action');
    }
    public function conUser_action(){
        return view('models.conUser_action');
    }
    public function decoUser_action(){
        return view('models.decoUser_action');
    }
    public function addBasket_action(){
        return view('models.addBasket_action');
    }
    public function basket () {
        $data = User::all();
        $validationCode = request()->session()->get('id_user');
        $products = DB::table('products')
                    ->join('basket', 'basket.id_product', '=', 'products.ID_PRODUCT')
                    ->where('basket.id_user', $validationCode)
                    ->get();
        return view('pages.basket')->with('products', $products);
    }

    public function generatepdf()
    {
        $validationCode = request()->session()->get('id_user');
        $products = DB::table('products')
        ->join('basket', 'basket.id_product', '=', 'products.ID_PRODUCT')
        ->where('basket.id_user', $validationCode)
        ->get();
        $data = User::all();
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pages.basket', ['data' => $data ,'products' => $products]);
        return $pdf->download('latihandpdf.pdf');
    }
    public function payment(Request $request)
    {
      $input =  $request->all();
      dd($input);
    }
    public function form()
    {
        return view('form');
    }
    
}

