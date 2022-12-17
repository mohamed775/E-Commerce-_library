<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showOrder()
    {
        $user = Auth::user()->id;
        $book = DB::table('carts')
        ->join('book','carts.book_id','=','book.id')
        ->where('carts.user_id',$user)
        ->select('book.*','carts.id as cart_id')->get();
        // $cart = Cart::select()->where('book_id',$book->id)->get();
        return view('User.cart',compact('book'));
    }
    public function deleteOrder($id)
    {
        Cart::destroy($id);
        return redirect('/cart')->with('success', __('messages.Deleted'));
    }
}
