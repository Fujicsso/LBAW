<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Use App\User;
Use App\Cart;

class CartController extends Controller
{
    public function show()
    {
      //will be retrieved from the session in the future
      if (!Auth::check()) return redirect('/register');

      $user = Auth::user();
      return view('pages.cart')->with('cart', $user->cart());
    }

    public function add($id)
    {
      //should probably make some verification to this id beforehand
      //temporary so it doesn't break while auth is incomplete
      if (!Auth::check()) 
          $user = User::find(1);
      else
          $user = Auth::user();

      
      $cart = DB::select('select * from cart where userid = :id and productid = :pid', ['id' => $user->id, 'pid' => $id]);

      if(count($cart) > 0)
      {
        DB::update('update cart set quant = :quant where userid = :uid and productid = :pid',
         ['quant' => $cart[0]->quant + 1, 'uid' => $user->id, 'pid' => $id]);
      }
      else
      {
        DB::insert('insert into cart (productid, userid, quant) values (:pid, :uid, 1)',
      ['pid' => $id, 'uid' => $user->id]);
      }
      
      return CartController::show();
    } 
}
