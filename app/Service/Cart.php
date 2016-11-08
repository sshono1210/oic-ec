<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/*
 * カート周りのメソド
 *
 * */
class Cart extends Model
{
    //商品の追加
    public function addItem($id){
        $item = DB::table('vegetables')->where('id', $id)->first(); //idが一致するものをvegetableテーブルから検索、取得
        $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
        $items[] = $item; // 取得したデータにオブジェクトを保存
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
        $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
        return $items;
    }
}
