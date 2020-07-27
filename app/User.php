<?php

namespace App;

use App\Traits\Users;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable,Users;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','staff_id', 'password','user_category_id','current_login_ip',
        'last_login_at','last_login_ip','last_logout_at',
    ];

    protected $dates = [
        'current_login_at',
        'last_login_at',
        'last_logout_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function  role()
    {
        return $this->belongsTo(UserCategory::class, 'user_category_id');
    }

//    public function hasRole($name)
//    {
//        return $this->role() -> name = $name;
//     }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'staff_id');
    }


    public function evend()
    {
        $this->hasMany(User::class);

    }

    public function collection()
    {
        return $this->hasMany(CashCollection::class,'staff_id');
    }


}
