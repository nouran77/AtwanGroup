<?php
/*choose language*/
Route::post('setLang','LanguageController@setLang');
Route::group(['middleware'=>'language'],function(){


Route::get('/', 'HomeController@index');

Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@login')->name('login');

Route::get('/','BrandController@showHomeBrands');
Route::get('/','ProductController@showHomeProducts');
Route::get('/products','ProductController@index');
Route::get('/category/{id}','ProductController@showCategoryProducts');
Route::get('/subcategory/{id}','ProductController@showSubCategoryProducts');
Route::get('/sub-subcategory/{id}','ProductController@showSubSubCategoryProducts');
Route::get('/productDetails/{id}','ProductController@productDetails')->name('productDetails');

/* Finishizer*/
Route::get('exclusive-agency','HomeController@finishizer');

/* Contact us*/
Route::get('contact-us','HomeController@contactUs');

/* Services Tab */
Route::get('market-cafe','HomeController@marketCafe');
Route::get('sales-center','HomeController@salesCenter');
Route::get('service-center','HomeController@serviceCenter');

/* About us */
Route::get('about-us','HomeController@aboutUs');
Route::get('ceo-message','HomeController@ceoMessage');

/* Admin Middleware */
Route::group(['middleware' => 'auth'], function () {
    /*=======================================
     =            Admin Dashboard            =
     =======================================*/
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

        /* Admin Home */
        Route::get('/', 'AdminController@dashboard');

        Route::get('/subsubcategory', 'ProductController@getSubSubCategories');

        /* Products */
        Route::get('products','ProductController@getAllProducts');
        Route::post('addNewProduct','ProductController@addNewProduct');
        Route::get('editProduct','ProductController@editProduct');
        Route::put('updateProduct','ProductController@updateProduct');
        Route::delete('deleteProduct','ProductController@deleteProduct');

        /* Brands */
        Route::get('brands', 'BrandController@index');
        Route::get('getAllBrands', 'BrandController@getAllBrands');
        Route::post('brands', 'BrandController@addNewBrand');
        Route::get('editBrand', 'BrandController@editBrand');
        Route::put('updateBrand', 'BrandController@updateBrand');
        Route::delete('deleteBrand', 'BrandController@deleteBrand');

        /* Categories */
        Route::get('categories', 'CategoryController@getCategories');
        Route::post('addNewCategory', 'CategoryController@addNewCategory');
        Route::get('editCategory', 'CategoryController@editCategory');
        Route::put('updateCategory', 'CategoryController@updateCategory');
        Route::delete('deleteCategory', 'CategoryController@deleteCategory');

        /* Sub Categories */
        Route::post('addSubCategory', 'SubCategoryController@addSubCategory');
        Route::get('categories/edit-subCategory/{id}', 'SubCategoryController@editSubCategory');
        Route::put('categories/edit-subCategory', 'SubCategoryController@updateSubCategory');
        Route::delete('deleteSubCategory', 'SubCategoryController@deleteSubCategory');

        /* Sub Sub Categories */
        Route::get('subsubCategories', 'SubSubCategoryController@index');
        Route::get('getAllSubSubCategories', 'SubSubCategoryController@getAllSubSubCategories');
        Route::post('subsubCategories', 'SubSubCategoryController@addNewSubSubCategory');
        Route::get('editSubSubCategories', 'SubSubCategoriesController@editSubSubCategories');
        Route::put('updateSubSubCategories', 'SubSubCategoriesController@updateSubSubCategories');
        Route::delete('deleteSubSubCategories', 'SubSubCategoriesController@deleteSubSubCategories');

    });
});
/*=====  End of Admin Dashboard  ======*/

/* Logout */
Route::get('logout', 'HomeController@logout')->name('logout');
});
