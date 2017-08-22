<?php
namespace App\Http\Controllers;
use App\Brand;
use App\Product;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use Helper;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products   = Product::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $subsubcategories = SubSubCategory::all();
        return view('admin.product', compact('products','categories','subcategories','subsubcategories'));
    }
    public function addNewProduct(Request $request)
    {
        $product                      = new Product;
        $product->name_english        = $request->name_english;
        $product->name_arabic         = $request->name_arabic;
        $product->description_english = $request->description_english;
        $product->description_arabic  = $request->description_arabic;
        $product->image               = Helper::uploadImage('image', 'products');
        $product->category_id         = $request->category;
        $product->subcategory_id      = $request->subcategory;
        $product->sub_subcategory_id   = $request->subsubcategory;

        if($product->save()) {
            return response()->json(['success' => true]);
        }
    }
    public function editProduct(Request $request)
    {
        $product = Product::find($request->id);
        return response()->json($product, 200);
    }
    public function updateProduct(Request $request)
    {
        $product                      = Product::find($request->id);
        $product->name_english        = $request->name_english;
        $product->name_arabic         = $request->name_arabic;
        $product->description_english = $request->description_english;
        $product->description_arabic  = $request->description_arabic;
        $product->category_id         = $request->category;
        $product->subcategory_id      = $request->subcategory;
        $product->subsubcategory_id   = $request->subsubcategory;
        if ($request->image)
        {
            $product->image = Helper::uploadImage('image','products');
        }
        $product->save();
        if($product->save()) {
            return response()->json(['success' => true]);
        }
    }
    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
    }
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('front.products',compact('products','categories'));
    }
    public function productDetails($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('front.productDetails',compact('product','categories'));
    }

    public function showCategoryProducts($id)
    {
        if (!empty($id)) {
            $categories = Category::all();
            $category = Category::where('id',$id)->first();
            $products = $category->products->all();
            return view('front.products', compact('products','category','categories'));
        }
        return redirect()->back();
    }

    public function showSubCategoryProducts($id)
    {
        if (!empty($id)) {
            $categories = Category::all();
            $subcategories = SubCategory::all();
            $subcategory = SubCategory::where('id',$id)->first();
            $products = $subcategory->products->all();
            return view('front.products', compact('products','subcategory','categories','subcategories'));
        }
        return redirect()->back();
    }

    public function showSubSubCategoryProducts($id)
    {
        if (!empty($id)) {
            $categories = Category::all();
            $subsubcategories = SubSubCategory::all();
            $subsubcategory = SubSubCategory::where('id',$id)->first();
            $products = $subsubcategory->products->all();
            return view('front.products', compact('products','subsubcategory','categories','subsubcategories'));
        }
        return redirect()->back();
    }
    public function showHomeProducts()
    {
        $products = Product::take(8)->get();
        $brands = Brand::all();
        $categories = Category::all();
        return view('front.home',compact('products','brands','categories'));
    }

    /* to get Cities in Dropdown menu */

    public function getSubSubCategories(Request $request)
    {
        $subsubCategory = SubSubCategory::select('name_english','id')->where('subcategory_id',$request->id)->get();
        return response()->json($subsubCategory);
    }
}