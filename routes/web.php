<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [
    'uses' => 'PageController@getHomepage',
    'as' => 'homepage'
]);

Route::get('/about', [
    'uses' => 'PageController@getAboutpage',
    'as' => 'aboutpage'
]);


Route::get('/productindex', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::post('/searchresultsindex',[
    'uses' => 'ProductController@getsearch',
    'as' => 'searchresults.index'
]);
Route::get('/add-to-cart/{id}',[
   'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}',[
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}',[
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);


Route::get('/shopping-cart',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout',[
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout',[
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);


Route::group(['prefix' => 'admin'], function (){
    route::group(['middleware' => 'auth'], function (){

        Route::get('/addproduct',[
            'uses' => 'AdminController@getAddProductView',
            'as' => 'admin.addproduct'
        ]);

        Route::post('/addproduct',[
            'uses' => 'AdminController@postAddProduct',
            'as' => 'admin.addproduct'
        ]);;
        Route::get('/addcategory',[
            'uses' => 'AdminController@getAddCategoryView',
            'as' => 'admin.addcategory'
        ]);
        Route::post('/addcategory',[
            'uses' => 'AdminController@postAddCategoryView',
            'as' => 'admin.addcategory'
        ]);;

        Route::get('/addsubcategory',[
            'uses' => 'AdminController@getAddSubCategoryView',
            'as' => 'admin.addsubcategory'
        ]);
        Route::post('/addsubcategory',[
            'uses' => 'AdminController@postAddSubCategoryView',
            'as' => 'admin.addsubcategory'
        ]);;
        Route::get('/',[
            'uses' => 'AdminController@getDashboardView',
            'as' => 'admin.dashboard'
        ]);

        Route::get('/removeproduct',[
            'uses' => 'AdminController@getRemoveProductView',
            'as' => 'admin.removeproduct'
        ]);
        Route::get('/removeproduct/{id}',[
            'uses' => 'AdminController@removeselectedproduct',
            'as' => 'admin.removeselectedproduct'
        ]);
        Route::get('/removecategory',[
            'uses' => 'AdminController@getremovecategoryview',
            'as' => 'admin.removecategory'
        ]);
        Route::get('/removecategory/{id}',[
            'uses' => 'AdminController@removeselectedcategory',
            'as' => 'admin.removeselectedcategory'
        ]);
        Route::get('/removesubcategory',[
            'uses' => 'AdminController@getremovesubcategoryview',
            'as' => 'admin.removesubcategory'
        ]);
        Route::get('/removesubcategory/{id}',[
            'uses' => 'AdminController@removeselectedsubcategory',
            'as' => 'admin.removeselectedsubcategory'
        ]);
        Route::get('/editproductsview',[
            'uses' => 'AdminController@geteditproductsview',
            'as' => 'admin.editproductsview'
        ]);
        Route::get('/editproductsview/{id}',[
            'uses' => 'AdminController@getselectededitproduct',
            'as' => 'admin.editproduct'
        ]);
        Route::post('/editproduct}',[
            'uses' => 'AdminController@posteditproduct',
            'as' => 'admin.posteditproduct'
        ]);

        Route::get('/manageorders',[
            'uses' => 'AdminController@getmanageorders',
            'as' => 'admin.manageordersview'
        ]);
        Route::get('/manageorders/{id}',[
            'uses' => 'AdminController@postremoveorder',
            'as' => 'admin.manageordersview'
        ]);
        Route::get('/manageorders/{id}',[
            'uses' => 'AdminController@removeorder',
            'as' => 'admin.removeorder'
        ]);
    });
});
Route::group(['prefix' => 'user'], function () {

    route::group(['middleware' => 'guest'], function (){

        Route::get('/signup',[
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);
        Route::post('/signin',[
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    route::group(['middleware' => 'auth'], function (){
        Route::get('/profile',[
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);


    });
});


