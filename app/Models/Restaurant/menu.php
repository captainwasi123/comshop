<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class menu extends Model
{
    use HasFactory;
    protected $table = 'tbl_products_info';

    public static function addMenu(array $data){
        $m = new menu;
        $m->restaurant_id = Auth::guard('restaurant')->user()->id;
        $m->category_id = $data['category'];
        $m->title = $data['title'];
        $m->price = $data['price'];
        $m->preparation_time = $data['prepration_time'];
        $m->description = $data['description'];
        $m->status = '0';
        $m->save();

        return $m->id;
    }

    public static function updateImage($id, $filename){
        $i = menu::find($id);
        $i->image = $filename;
        $i->save();
    }
}
