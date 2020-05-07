<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $table  = 'employees';
    protected $fillable = ['name','staff_id','email','post','image','address','telephone_num'];
    protected $hidden =['created_at','updated_at','deleted_at'];

    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function education()
    {
        return $this->belongsTo(EmployeeEducation::class);

    }

    public function company()
    {
        return $this->hasManyThrough(Company::class,User::class);
    }

    public function project()
    {
        return $this->hasManyThrough(Project::class, User::class);
    }

    public function comment()
    {
        return $this->hasManyThrough(Comment::class, User::class);
    }

    /**
     * For Company User
     */
    public function companyUser()
    {
        return $this->hasManyThrough(CompanyUser::class, User::class);
    }


//    /**
//     * Mutators and Accessors
//     */
//
//    public function getNameAttribute($name)
//    {
//        $this->attributes['name'] = ucfirst($name);
//    }
//
//    public function setNameAttribute($name)
//    {
//        return ucfirst($name);
//    }
//
//    protected function getEmailAttribute($email)
//    {
//        $this->attributes['email'] = $email;
//    }
//
//
//    public function setEmailAttribute($email)
//    {
//        return strtolower($email);
//    }
//
//    public function getPostAttribute($post)
//    {
//        $this->attributes['post'] = ucfirst($post);
//    }
//    public function setPostAttribute($post)
//    {
//        return $post;
//    }
//
//    public function getImageAttribute($image)
//    {
//        $this->attributes['image'] = $image;
//    }
//    public function setImageAttribute($image)
//    {
//        return $image;
//    }
//

}
