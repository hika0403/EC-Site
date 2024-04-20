<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id'
    ];

    public function addCart($item_id)
    {
        $user_id = Auth::id();
        if (is_null($user_id)) {
            return ;
        }else{
            $cart_add_info = Cart::firstOrCreate(['item_id' => $item_id,'user_id' => $user_id]);
        }

        if($cart_add_info->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }else{
            $message = 'カートに登録済みです';
        }

        return $message;
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function showCart()
    {
        $user_id = Auth::id();
        $data['my_carts'] = Cart::where('user_id', $user_id)->get();


        return $data;
    }

    public function deleteCart($item_id)
    {
        $user_id = Auth::id();
        $delete = $this->where('user_id',$user_id)->where('item_id',$item_id)->delete();

        if($delete > 0){
            $message = 'カートから1つの商品を削除しました';
        }else{
            $message = '削除に失敗しました';
        }
        return $message;
    }
}