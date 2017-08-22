<?php

namespace App\Http\Controllers;
    use App\Category;
    use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();
        return view('admin.category.category',compact('categories'));
    }

    public function addNewCategory(Request $request)
    {

        $category               = new Category;
        $category->name_english = $request->name_english;
        $category->name_arabic  = $request->name_arabic;
        $category->save();

    }

    public function editCategory(Request $request)
    {
        $category = Category::find($request->id);
        return response()->json($category, 200);
    }

    public function updateCategory(Request $request)
    {
        $category = Category::find($request->id);
        $category->name_english = $request->name_english;
        $category->name_arabic  = $request->name_arabic;
        $category->save();

    }

    public function deleteCategory(Request $request)
    {
        $category = Category::find($request);
        $category->delete();

    }


    public function getHomeCategories()
    {
        $categories = Category::get();
        return view('front.home',compact('categories'));
    }

}
