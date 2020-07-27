<?php


namespace App\Traits;


 trait Employees
{

    /**
    +-----------------------+-----------------+------+-----+---------+----------------+
    | Field                 | Type            | Null | Key | Default | Extra          |
    +-----------------------+-----------------+------+-----+---------+----------------+
    | id                    | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name                  | varchar(255)    | NO   | UNI | NULL    |                |
    | staff_id              | bigint unsigned | NO   | UNI | NULL    |                |
    | social_security_no    | int unsigned    | NO   | UNI | NULL    |                |
    | email                 | varchar(255)    | NO   | UNI | NULL    |                |
    | employee_education_id | bigint unsigned | NO   | MUL | NULL    |                |
    | education             | varchar(255)    | NO   |     | NULL    |                |
    | address               | varchar(255)    | NO   |     | NULL    |                |
    | telephone_num         | int unsigned    | NO   |     | NULL    |                |
    | image                 | mediumtext      | NO   |     | NULL    |                |
    | department_id         | bigint unsigned | NO   | MUL | NULL    |                |
    | designation_id        | bigint unsigned | NO   | MUL | NULL    |                |
    | deleted_at            | timestamp       | YES  |     | NULL    |                |
    | created_at            | timestamp       | YES  |     | NULL    |                |
    | updated_at            | timestamp       | YES  |     | NULL    |                |
    +-----------------------+-----------------+------+-----+---------+----------------+
     */
     public function getSocialSecurityAttribute($ssn)
     {
         return '0'.$ssn;
    }
     public function getImageAttribute($image)
     {
         return $image;
     }
     public function getAddressAttribute($address)
     {
         return strtolower($address);
    }
     public function getEducationAttribute($education)
     {
         return strtoupper($education);
    }

     public function getNameAttribute($name)
     {
         return ucfirst($name);
     }

     public function getEmailAttribute($email)
     {
         return strtolower($email);
     }
     public function getTelephoneNumberAttribute($telephoneNumber)
     {
         $num = null;
         if ($telephoneNumber >= 7){
             $num = '(+220) - '.$telephoneNumber;
         }
         else{
             $num = '(+220) - '.$telephoneNumber.'00';
         }
         return $num;
     }

     public function getStaffIdAttribute($staffid)
     {
         return $staffid;
     }



     /**
      * @Mutator
      * @param $name
      * @return string
      */

     public function setNameAttribute($name)
     {
         return $this -> attributes['name'] = strtoupper($name);
     }

     public function setStaffIdAttribute($staffid)
     {
         return $this -> attributes['staff_id'] = $staffid;
     }


     public function setSocialSecurityAttribute($ssn)
     {
         return $this -> attributes['social_security_no'] = $ssn;
     }


 }
