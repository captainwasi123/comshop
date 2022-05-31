<?php

namespace App\Models\order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class reviews extends Model
{
    use HasFactory;
    protected $table = 'tbl_reviews_info';


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
