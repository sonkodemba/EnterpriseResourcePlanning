<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //

    protected $table = 'suppliers';
    protected $fillable = ['name','code','category_id','address','telephone_num','descriptions'];
    protected $hidden = ['id','created_at','deleted_at','updated_at'];

    /**
    +-------------+-----------------+------+-----+---------+----------------+
    | Field       | Type            | Null | Key | Default | Extra          |
    +-------------+-----------------+------+-----+---------+----------------+
    | id          | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name        | varchar(255)    | NO   | UNI | NULL    |                |
    | code        | varchar(255)    | NO   | UNI | NULL    |                |
    | category_id | bigint unsigned | NO   | MUL | NULL    |                |
    | address     | longtext        | YES  |     | NULL    |                |
    | telephone   | int unsigned    | NO   |     | NULL    |                |
    | deleted_at  | timestamp       | YES  |     | NULL    |                |
    | created_at  | timestamp       | YES  |     | NULL    |                |
    | updated_at  | timestamp       | YES  |     | NULL    |                |
    +-------------+-----------------+------+-----+---------+----------------+

     */

    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public function category()
    {
        return $this->belongsTo(SupplierCategory::class);
    }

}
