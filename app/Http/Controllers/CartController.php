<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\PaymentTransations;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showOrder()
    {

        $user = Auth::user()->id;
        // $book = DB::table('carts')
        // ->join('book','carts.book_id','=','book.id')
        // ->where('carts.user_id',$user)

        // ->select('book.*','carts.id as cart_id')->get();
        $book=Cart::with('book')->select()->where('user_id',$user)->get();
        // return $book;
        $book_price=Cart::with('book')
                        ->where('user_id',$user)
                        ->select()
                        ->get();
        $total_price=0;
        if(count($book_price)>0){
            foreach($book_price as $item){
                $total_price +=$item->book->price;
            }
        }
        // $cart = Cart::select()->where('book_id',$book->id)->get();
        if (request('id') && request('resourcePath')) {
            $payment_id=request('id');
            $resourcePath=request('resourcePath');
            if (isset($payment_id)) {
                $showSuccessPaymentMessage = true;
                PaymentTransations::create([
                    'transation_id'=>$payment_id,
                    'user_id'=>Auth::user()->id
                ]);
                Cart::where('user_id',$user)->delete();
                return view('User.cart',compact('book','total_price'))-> with(['success' =>  'Transaction Successfully ']);
           } else {

               $showFailPaymentMessage = true;
                return view('User.cart',compact('book','total_price'))-> with(['fail'  => 'transation fail !']);
           }
       }
        return view('User.cart',compact('book','total_price'));
    }
    public function deleteOrder($id)
    {
        Cart::destroy($id);
        return redirect('/cart')->with('success', __('messages.Deleted'));
    }




    private function getPaymentStatus($id, $resourcepath)
    {
        $url = config('payment.hyperpay.url');
        $url .= $resourcepath;
        $url .= "?entityId=" . config('payment.hyperpay.entity_id');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer ' . config('payment.hyperpay.auth_key')));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, config('payment.hyperpay.production'));// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return json_decode($responseData, true);
    }

}
