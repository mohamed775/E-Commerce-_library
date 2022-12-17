<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainHomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::select()->get();
        $book = Book::select()->get();
        $user = User::select()->get();
        return view('User.welcome',compact('category','book','user'));
    }

    public function show($id)
    {
        $category = Category::select()->get();
        $book = Book::select()->where('cat_id',$id)->get();
        return view('User.welcome',compact('book','category'));
    }

    public function search(Request $request)
    {
        $category = Category::select()->get();
        $search = request('search');
        $book = Book::select()->where(function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->paginate(PAGINATION_COUNTER);   
        return view('User.welcome',compact('book','category'));
    
    }

    public function addToCart(Request $request)
    {
        if(Auth::user())
        {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->book_id = $request->book_id;
            $cart->save();
            return redirect('/')->with('success', __('messages.Added'));;
        }
        else
        {
            return redirect('login');
        }
        
    }
}