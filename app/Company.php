<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    /**
     * @var array
     *
        +--------------+---------------------+------+-----+---------+----------------+
        | Field        | Type                | Null | Key | Default | Extra          |
        +--------------+---------------------+------+-----+---------+----------------+
        | id           | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)        | NO   |     | NULL    |                |
        | descriptions | longtext            | YES  |     | NULL    |                |
        | user_id      | bigint(20) unsigned | NO   | MUL | NULL    |                |
        | deleted_at   | timestamp           | YES  |     | NULL    |                |
        | created_at   | timestamp           | YES  |     | NULL    |                |
        | updated_at   | timestamp           | YES  |     | NULL    |                |
        +--------------+---------------------+------+-----+---------+----------------+

     */

    protected $fillable = ['name','descriptions', 'user_id'];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
       return $this->hasMany(Project::class);
    }

    public function task()
    {
       return $this->hasManyThrough(Task::class,Project::class);
    }

    /**
     * Company => CompanyUser
     */

    public function companyuser()
    {
        return $this->hasManyThrough(CompanyUser::class,User::class);
    }


}
