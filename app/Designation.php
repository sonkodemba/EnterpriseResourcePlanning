<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @method static paginate(int $int)
 */
class Designation extends Model
{
    protected $table  = 'designations';
    protected $fillable = ['name','descriptions'];
    protected $hidden =['created_at','updated_at','deleted_at'];

    public function item()
    {
        return $this->hasManyThrough(Item::class, Employee::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function user()
    {
        return $this->hasManyThrough(User::class,Employee::class);
    }

    public function company()
    {
       return $this->hasManyThrough(Company::class,Employee::class);
    }

    public function project()
    {
        return $this->hasManyThrough(Project::class,Employee::class);
    }

    public function task()
    {
        return $this->hasManyThrough(Task::class,Employee::class);
    }

    public function status()
    {
        return $this->hasManyThrough(Status::class, Employee::class);
    }

    public function comment()
    {
        return $this->hasManyThrough(Comment::class, Employee::class);
    }

    /**
     * COmpany User
     */

    public function companyuser()
    {
        return $this->hasManyThrough(CompanyUser::class, Employee::class);
    }
}
