<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/*
 * カート周りのメソド
 * カートのデータは session items キーに登録する
 * items の中身の形式で
 * [
 *    $id => [
 *        item => $itemData
 *        amount => 2
 *    ],
 * ]
 *
 * */
class Cart extends Model
{
    /**
     * 商品の追加。
     * 追加時点で商品をまとめて集計する
     */
    public function addItem($id, $amount){
        
        $item = DB::table('vegetables')->where('id', $id)->first(); //idが一致するものをvegetableテーブルから検索、取得
        
        $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
        if(isset($item[$id]))
        {//登録済み商品の追加パターン
            $item[$id]["amount"] = $item[$id]["amount"]+$amouont;
        }else
        {//新規追加アイテムパターン
            $item[$id] = [
                "item" => $item,
                "amouont" => $amount
            ]
        }        
        session()->put("items", $items); //取得したデータをsessionに保存。 $_SESSION["items"] に保存するのと同じ
    }
    //商品の削除
    public function removeItem($index){
        session()->forget("items.$index"); //sessionから選んだ商品を削除。例えば$items[0]の削除は items.0 と指定できる。
    }
    //カートを空にする
    public function clear(){
        session()->flush(); //sessionの全データを削除
    }
    //カート内商品すべてを取得
    public function getList(){
        $cartItems = session()->get("items",[]); //セッションデータをそのまま取得、nullの場合は空の配列

        $items = []; //表に渡す最終的な商品の配列（数量は足し算済みになってるようにする）

        foreach($cartItems as $cartItem){
            $id = $cartItem->id;
//            $items[$id] =

//            if($id === 2) {
//
//            }
//            if($id === 3) {
//
//            }
//            if($id === 4) {
//
//            }
//            if($id === 5) {
//
//            }
        };

//        foreach($items as $item){
//            $id = $item["id"]->get();
//            $tests[] = $id;
//        };
//        dd($tests);


//        $listItems = [
//            "kana" => "じゃがいも",
//            "size" => "じゃがいも",
//            "amount" => "じゃがいも",
//            "price" => "じゃがいも"
//        ];
//        dd($items);
        return $items;
    }


    /*
     * name kana img description size contents price
     * */
}
