<?php


namespace App\Traits;


trait EmploymentCategory
{
    /**
    +--------------+-----------------+------+-----+---------+----------------+
    | Field        | Type            | Null | Key | Default | Extra          |
    +--------------+-----------------+------+-----+---------+----------------+
    | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name         | varchar(255)    | NO   | UNI | NULL    |                |
    | descriptions | longtext        | YES  |     | NULL    |                |
    | created_at   | timestamp       | YES  |     | NULL    |                |
    | updated_at   | timestamp       | YES  |     | NULL    |                |
    +--------------+-----------------+------+-----+---------+----------------+

     */
    public function getCodeAttribute($code)
    {
        /**
         * Capitalized it, then show it into the @view
         */
        return strtoupper($code);
    }

    public function getnameAttribute($name)
    {
        return strtoupper($name);
    }

    public function getDescriptionsAttribute($descriptions)
    {
        return $descriptions;
    }



    /***************************************************************************
     * Alter Data from a form before its save into the Database.
     * The @mutator allows you to alter  data before it's saved to a database.
     ***************************************************************************

    /**
     * @param $code
     * @return string
     */
    public function setCodeAttribute($code)
    {
        return  $this -> attributes['code'] = strtolower($code);
    }

    /***************************************************************************
     * Alter Data from a form before its save into the Database.
     * The @mutator allows you to alter  data before it's saved to a database.
     ***************************************************************************
     *
     *
     * /**
     * @param $name
     * @return string
     */
    public function setNameAttribute($name)
    {
        return  $this -> attributes['name'] = strtolower($name);
    }

    /**
     * @param $descriptions
     * @return mixed
     */
    public function setDescriptionsAttribute($descriptions)
    {
        return $this -> attributes['descriptions'] = $descriptions;
    }


}
