<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generalSettings extends Model
{
    use HasFactory;
    protected $table = 'tbl_general_settings';
    public $timestamps = false;
}