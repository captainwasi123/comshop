<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant\menu;

class categories extends Model
{
    use HasFactory;
    protected $table = 'tbl_category_info';
    public $timestamps = false;


    public function menu(){
        return $this->hasMany(menu::class, 'category_id', 'id');
    }
}
