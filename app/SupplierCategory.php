<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 */
class SupplierCategory extends Model
{
    //

    protected $table = 'supplier_categories';
    protected $fillable = ['name','descriptions'];
    protected $hidden = ['id','created_at','deleted_at','updated_at'];

    /**
    +--------------+-----------------+------+-----+---------+----------------+
    | Field        | Type            | Null | Key | Default | Extra          |
    +--------------+-----------------+------+-----+---------+----------------+
    | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name         | varchar(255)    | NO   | UNI | NULL    |                |
    | descriptions | longtext        | YES  |     | NULL    |                |
    | deleted_at   | timestamp       | YES  |     | NULL    |                |
    | created_at   | timestamp       | YES  |     | NULL    |                |
    | updated_at   | timestamp       | YES  |     | NULL    |                |
    +--------------+-----------------+------+-----+---------+----------------+

     */

    public function item()
    {
        return $this->hasManyThrough(Item::class,Supplier::class);
    }

    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }


}
