<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{

    protected $table='user_categories';


    protected $fillable = [
            'name',
            'descriptions',

    ];


    public function user()
    {
        return $this->hasMany(User::class);

    }

    public function cash_collection()
    {
        return $this->hasManyThrough(CashCollection::class,User::class,'category_id','user_id');

    }
}
