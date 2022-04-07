<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\categories;
use App\Models\variant;


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
        $m->status = '1';
        $m->save();

        return $m->id;
    }

    public static function editMenu($id, array $data){
        $m = menu::find($id);
        $m->category_id = $data['category'];
        $m->title = $data['title'];
        $m->price = $data['price'];
        $m->preparation_time = $data['prepration_time'];
        $m->description = $data['description'];
        $m->save();

        return $m->id;
    }

    public static function updateImage($id, $filename){
        $i = menu::find($id);
        $i->image = $filename;
        $i->save();
    }

    public function cat()
    {
    	return $this->belongsTo(categories::class,'category_id','id');
    }

    public function variant(){
        return $this->hasMany(variant::class, 'product_id', 'id')->orderBy('id');
    }

}
