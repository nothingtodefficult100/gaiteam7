<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class WishlistController extends Controller
{
    public function AddWishlist($id)
    {

    	$userid=Auth::id();
    	$check=DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();

    	$data = array(
    		'user_id' => $userid,
    		'product_id'=>$id
    	);

    	if (Auth::check()) {
    		if ($check) {
    			// return \Response::json(['error' => 'Product Already has on your wishlist']);
                return response()->json(['error' => 'Product Already has on your wishlist']);
    		}else{
    			DB::table('wishlists')->insert($data);
             //   return \Response::json(['success' => 'Successfully Added on your wishlist']);
             return response()->json(['success' => 'Successfully Added on your wishlist']);
    		}
    	}else{
    		//return \Response::json(['error' => 'At first login your account']);
              return response()->json(['error' => 'At first login your account']);
    	}

    }


    public function removewishlist ($id) {
        $data = DB::table('wishlists')->where('id',$id)->first();
        return response([
            'data'=> $data
        ]);
        $notification=array(
            'messege'=>'Successfully remove product from wishlist',
             'alert-type'=>'success'
       );
       return Redirect()->back()->with($notification);
    }
}
