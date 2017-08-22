<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;

class SubCategoryController extends Controller
{
    public function addSubCategory(Request $request)
    {
        $subCategory              = new SubCategory;
        $subCategory->name_english= $request->name_english;
        $subCategory->name_arabic = $request->name_arabic;
        $subCategory->category_id = $request->category;
        $subCategory->save();

    }

    public function editSubCategory(Request $request)
    {
        $subCategory = SubCategory::find($request->id);
        $categories  = Category::all();
        return view('admin.category.edit-subCategory', compact('subCategory', 'categories'));
    }

    public function updateSubCategory(Request $request)
    {
        $subCategory              = SubCategory::find($request->id);
        $subCategory->name_english = $request->name_english;
        $subCategory->name_arabic = $request->name_arabic;
        $subCategory->category_id = $request->category;
        $subCategory->save();

    }

    public function deleteSubCategory(Request $request)
    {
        $subCategory = SubCategory::find($request->id);
        $subCategory->delete();

    }

}
