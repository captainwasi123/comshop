<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marketplace extends Model
{
    protected $table = 'tbl_marketplace_info';
    public $timestamps = false;
    use HasFactory;
}
