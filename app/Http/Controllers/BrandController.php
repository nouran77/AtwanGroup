<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Helpers\Helper;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand',compact('brands'));
    }

    public function getAllBrands()
    {
        $brands = Brand::all();
        return response()->json(['brands' => $brands], 200);

    }

    public function addNewBrand(Request $request)
    {
        $brand               = new Brand;
        $brand->name_english = $request->name_english;
        $brand->name_arabic  = $request->name_arabic;
        $brand->image        = Helper::uploadImage('image', 'brands');
        if($brand->save()) {
            return response()->json($brand, 200);
        }
    }

    public function editBrand(Request $request)
    {
        $brand = Brand::find($request->id);
        return response()->json($brand, 200);
    }

    public function updateBrand(Request $request)
    {
        $brand              = Brand::find($request->id);
        $brand->name_english        = $request->name_english;
        $brand->name_arabic        = $request->name_arabic;

        if($request->image)
        {
            $brand->image    = Helper::uploadImage('image','brands');
        }
        $brand->save();
    }

    public function deleteBrand(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->delete();
    }

    public function showHomeBrands()
    {
        $brands = Brand::all();
        return view('front.home',compact('brands'));
    }
}
