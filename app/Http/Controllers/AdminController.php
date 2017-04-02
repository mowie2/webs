<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Session;
use App\SubCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function getAddProductView()
    {
        $categorie = Category::all();
        $subcategorie = SubCategory::all();

        return view('admin.addproduct', compact('categorie','subcategorie'));
    }
    public function postAddProduct(Request $request)
    {
        Product::insert([
            'title' => $request->input('title'),
            'description' => $request->input('discription'),
            'price' => $request->input('price'),
            'imagePath' => $request->input('imagepath'),
            'category' => $request->input('category'),
            'subcategory' => $request->input('subcategory')
        ]);
        return redirect()->route('admin.dashboard');
    }

    public function getRemoveProductView()
    {
        $products = Product::all();
        return view('admin.removeproduct', compact('products'));
    }

    public function getremovecategoryview()
    {
        $category = Category::all();
        //dd($category);
        return view('admin.removecategory', compact('category'));
    }

    public function removeselectedcategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('admin.removecategory');
    }
    public function getremovesubcategoryview()
    {
        $subcategory = SubCategory::all();
        //dd($category);
        return view('admin.removesubcategory', compact('subcategory'));
    }

    public function removeselectedsubcategory($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();

        return redirect()->route('admin.removesubcategory');
    }

    public function removeselectedproduct($id)
    {
        // delete
        $product = Product::find($id);
        $product->delete();

        // redirect
        return redirect()->route('admin.removeproduct');
    }

    public function getAddCategoryView()
    {
        return view('admin.addcategory');
    }
    public function postAddCategoryView(Request $request)
    {
        Category::insert([
            'genre' => $request->input('genre')
        ]);
        return redirect()->route('admin.dashboard');
    }
    public function getAddSubCategoryView()
    {
        return view('admin.addsubcategory');
    }
    public function postAddSubCategoryView(Request $request)
    {
        SubCategory::insert([
            'group' => $request->input('group')
        ]);
        return redirect()->route('admin.dashboard');
    }
    public function getDashboardView()
    {
        return view('admin.dashboard');
    }

    public function getRemoveCategory()
    {

        return view('admin.dashboard');
    }

    public function geteditproductsview()
    {
        $products = Product::all();
        return view('admin.editproductsview', compact('products'));
    }
    public function getselectededitproduct($id)
    {
        $categorie = Category::all();
        $subcategorie = SubCategory::all();

        $product = Product::find($id);
        return view('admin.editproduct',compact('product','categorie','subcategorie'));
    }

    public function posteditproduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->discription;
        $product->imagePath = $request->imagePath;
        $product->category = $request->category;
        $product->subcategory = $request->subcategory;
        $product->save();

        return redirect()->route('admin.editproductsview');
    }

    public function getmanageorders()
    {
        $orders = Order::all();
        $orders->transform(function ($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('admin.manageordersview',['orders' => $orders]);
    }
    public function removeorder($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect()->route('admin.manageordersview');
    }

}
