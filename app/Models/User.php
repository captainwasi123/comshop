<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\userAddress;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tbl_users_info';


    public static function newUser(array $data){
        $u = new User;
        $u->name = $data['name'];
        $u->email = $data['email'];
        $u->phone = $data['phone'];
        $u->password = bcrypt($data['password']);
        $u->facebook_id ='0';
        $u->google_id = '0';
        $u->status = '1';
        $u->save();

        return $u;
    }
    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'facebook_id',
        'google_id',
        'status'

    ];
   

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function user_address()
    {
    	return $this->belongsTo(userAddress::class,'id','user_id');
    }
}
