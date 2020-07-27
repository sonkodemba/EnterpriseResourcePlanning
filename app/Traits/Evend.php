<?php


namespace App\Traits;


trait Evend
{
    /**
    +-----------------+-----------------------+------+-----+---------+----------------+
    | Field           | Type                  | Null | Key | Default | Extra          |
    +-----------------+-----------------------+------+-----+---------+----------------+
    | id              | bigint unsigned       | NO   | PRI | NULL    | auto_increment |
    | user_id         | bigint unsigned       | NO   | MUL | NULL    |                |
    | meter_num       | bigint unsigned       | NO   |     | NULL    |                |
    | meter_name      | varchar(255)          | NO   |     | NULL    |                |
    | generated_token | bigint unsigned       | NO   |     | NULL    |                |
    | amount          | decimal(8,2) unsigned | NO   |     | NULL    |                |
    | deleted_at      | timestamp             | YES  |     | NULL    |                |
    | created_at      | timestamp             | YES  |     | NULL    |                |
    | updated_at      | timestamp             | YES  |     | NULL    |                |
    +-----------------+-----------------------+------+-----+---------+----------------+

     */
    public function getUserIdAttribute($userId)
    {
        /**
         * Capitalized it, then show it into the @view
         */
        return $userId;
    }

    public function getMeterNumAttribute($number)
    {
        return $number;
    }

    public function getMeterNameAttribute($metr_name)
    {
        return ucfirst($metr_name);
    }

    public function getGeenratedTokenAttribute($token)
    {

        return '0'.$token;
    }
}
