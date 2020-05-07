<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Process\Process;

class Item extends Model
{

    protected $table  ='items';
    protected $fillable = [
            'batch_id',
            'item_category_id',
            'wingle_no',
            'sim_serial_no',
            'imei',
            'item_serial',
            'model_id',
            'account_no',
            'mac_address1',
            'mac_address2',
            'mac_address3',
            'employee_id',
            'supplier_id',
            'grn_num','grn',
            'processor_id',
            'descriptions'
    ];

    protected $hidden = ['id','created_at','updated_at','deleted_at'];
    /**
     * +------------------+-----------------+------+-----+---------+----------------+
        | Field            | Type            | Null | Key | Default | Extra          |
        +------------------+-----------------+------+-----+---------+----------------+
        | id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | batch_id         | bigint unsigned | NO   | MUL | NULL    |                |
        | item_category_id | bigint unsigned | NO   | MUL | NULL    |                |
        | wingle_no        | int unsigned    | YES  |     | NULL    |                |
        | sim_serial_no    | bigint unsigned | YES  |     | NULL    |                |
        | imei             | bigint unsigned | YES  | UNI | NULL    |                |
        | item_serial      | varchar(255)    | YES  | UNI | NULL    |                |
        | model_id         | bigint unsigned | NO   | MUL | NULL    |                |
        | account_no       | bigint unsigned | YES  |     | NULL    |                |
        | mac_address1     | varchar(17)     | YES  | UNI | NULL    |                |
        | mac_address2     | varchar(17)     | YES  | UNI | NULL    |                |
        | mac_address3     | varchar(17)     | YES  | UNI | NULL    |                |
        | employee_id      | bigint unsigned | NO   | MUL | NULL    |                |
        | supplier_id      | bigint unsigned | NO   | MUL | NULL    |                |
        | grn_num          | bigint unsigned | YES  |     | NULL    |                |
        | grn              | mediumtext      | YES  |     | NULL    |                |
        | processor_id     | bigint unsigned | YES  | MUL | NULL    |                |
        | descriptions     | longtext        | YES  |     | NULL    |                |
        | deleted_at       | timestamp       | YES  |     | NULL    |                |
        | created_at       | timestamp       | YES  |     | NULL    |                |
        | updated_at       | timestamp       | YES  |     | NULL    |                |
        +------------------+-----------------+------+-----+---------+----------------+

     */


    public function model()
    {
        return $this->belongsTo(ItemModel::class);
    }
    public function processor()
    {
        return $this->belongsTo(Process::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function itemcategory()
    {
        return $this->belongsTo(ItemCategory::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
