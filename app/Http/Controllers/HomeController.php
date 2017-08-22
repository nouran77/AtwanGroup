<?php
namespace App\Http\Controllers;
use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('front.home',compact('products','brands','categories'));
    }

    public function login(Request $request)
    {
        if($request->remember) {
            $remember = true;
        }
        else {
            $remember = false;
        }
        $loginData = [
            'email'   =>$request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($loginData, $remember)){
            if (Auth::user()->type == 'user'){
                $url = '/';
            }
            elseif(Auth::user()->type == 'admin'){
                $url = 'admin';
            }
            return response()->json(['success' => true, 'url' => $url], 200);
        }
        else {
            return response()->json(['error' => ['Invalid mobile number or password. Please try again.']], 402);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function getLogin()
    {
        return view('admin.login');
    }

    public function marketCafe()
    {
        $categories = Category::all();
        return view('front.services.market-cafe',compact('categories'));
    }

    public function serviceCenter()
    {
        $categories = Category::all();
        return view('front.services.service-center',compact('categories'));
    }

    public function salesCenter()
    {
        $categories = Category::all();
        return view('front.services.sales-center',compact('categories'));
    }

    public function aboutUs()
    {
        $categories = Category::all();
        return view('front.about-us',compact('categories'));
    }

    public function ceoMessage()
    {
        $categories = Category::all();
        return view('front.ceo-message',compact('categories'));
    }

    public function finishizer()
    {
        $categories = Category::all();
        return view('front.finishizer',compact('categories'));
    }

    public function contactUs()
    {
        $categories = Category::all();
        return view('front.contact-us',compact('categories'));
    }

}