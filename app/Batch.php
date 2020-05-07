<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $fillable = ['name','descriptions'];
    protected $hidden = ['id','created_at','updated_at','deleted_at'];

    /**
     *  +--------------+-----------------+------+-----+---------+----------------+
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
        return $this->hasMany(Item::class);
    }

}
