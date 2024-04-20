<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart; 
use App\Models\Category;     

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all(); // 商品一覧を取得
        $categories = Category::all(); 
        return view('index', ['items' => $items, 'categories' => $categories]); // indexビューにitemsを渡す
    }

    public function showDetail($id)
    {
        $item = Item::find($id); // idの商品を取得
        if (is_null($item)) {
            \session::flash('err_msg', 'データがありません。');
            return redirect(route('items'));
        }

        return view('detail', ['item' => $item]);
    }

    public function getCategory($id)
    {
        $category = new Category;
        $showcategories = $category->showCategory($id);
        return view ('category', compact('showcategories'));
    }

    public function myCart(Cart $cart)
    {
        $data = $cart->showCart();
        return view('mycart',$data);
    }

    public function addMycart(Request $request,Cart $cart)
    {
        $item_id = $request->item_id;
        $message = $cart->addCart($item_id);
        $data = $cart->showCart();

        return view('mycart',$data)->with('message',$message);
         
    }

    public function deleteCart(Request $request,Cart $cart)
    {
        $item_id=$request->item_id;
        $message = $cart->deleteCart($item_id);

        $data = $cart->showCart();

        return view('mycart',$data)->with('message',$message);
    }
}
