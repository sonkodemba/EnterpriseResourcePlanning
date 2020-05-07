<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{

    /**
     * @var string
     * fetch or retrieve data from @item_categories table
     */
    protected $table = 'item_categories';

    /**
     * @var array
     * for Mass Assignment, fill data into the database using these fields @name ,@descriptions
     */
    protected $fillable = ['name','descriptions'];

    /**
     * @var hidden
     * These fields gets data automatically such as @id,@created_at, @updated_at and @deleted_at
     */
    protected $hidden = ['id','created_at','deleted_at','updated_at'];

    /**
   *+--------------+-----------------+------+-----+---------+----------------+
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

    /**
     * Eloquent Relationships
     */
    public function item()
    {
        return $this->hasMany(Item::class);
    }




}
