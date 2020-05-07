<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    //

    protected $table = 'processors';
    protected $fillable = ['name','size','descriptions'];
    protected $hidden = ['id','created_at','deleted_at','updated_at'];

    /**
    +--------------+-----------------+------+-----+---------+----------------+
    | Field        | Type            | Null | Key | Default | Extra          |
    +--------------+-----------------+------+-----+---------+----------------+
    | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name         | varchar(255)    | NO   | UNI | NULL    |                |
    | size         | varchar(255)    | YES  |     | NULL    |                |
    | descriptions | longtext        | YES  |     | NULL    |                |
    | deleted_at   | timestamp       | YES  |     | NULL    |                |
    | created_at   | timestamp       | YES  |     | NULL    |                |
    | updated_at   | timestamp       | YES  |     | NULL    |                |
    +--------------+-----------------+------+-----+---------+----------------+


     */

    public function item()
    {
        return $this->hasMany(Item::class);
    }

}
