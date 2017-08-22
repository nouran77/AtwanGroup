<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\SubSubCategory;

class SubSubCategoryController extends Controller
{
    public function index()
    {
        $subsubCategories = SubSubCategory::with('subCategory')->get();
        $subCategories = SubCategory::all();
        return view('admin.sub-subCategory',compact('subsubCategories','subCategories'));
    }

    public function getAllSubSubCategories()
    {
        $subsubCategories = SubSubCategory::with('subCategory')->get();
        $subCategories = SubCategory::all();
        return response()->json(['subsubCategories' => $subsubCategories,'subCategories' => $subCategories], 200);

    }

    public function addNewSubSubCategory(Request $request)
    {
        $subsubCategory               = new SubSubCategory;
        $subsubCategory->name_english = $request->name_english;
        $subsubCategory->name_arabic  = $request->name_arabic;
        $subsubCategory->subcategory_id = $request->subcategory;
        if($subsubCategory->save()) {
            return response()->json($subsubCategory, 200);
        }
    }

    public function editSubSubCategory(Request $request)
    {
        $subsubCategory = SubSubCategory::find($request->id);
        return response()->json($subsubCategory, 200);
    }

    public function updateSubSubCategory(Request $request)
    {
        $subsubCategory              = SubSubCategory::find($request->id);
        $subsubCategory->name_english        = $request->name_english;
        $subsubCategory->name_arabic        = $request->name_arabic;
        $subsubCategory->subcategory_id = $request->subcategory;

        $subsubCategory->save();
    }

    public function deleteSubSubCategory(Request $request)
    {
        $subsubCategory = SubSubCategory::find($request->id);
        $subsubCategory->delete();
    }

    public function showHomeSubSubCategories()
    {
        $subsubCategories = SubSubCategory::all();
        return view('front.home',compact('subsubCategories'));
    }



}
