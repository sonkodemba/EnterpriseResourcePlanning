<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
            | catridge         | varchar(255)    | YES  | UNI | NULL    |                |
            | descriptions     | longtext        | YES  |     | NULL    |                |
            | deleted_at       | timestamp       | YES  |     | NULL    |                |
            | created_at       | timestamp       | YES  |     | NULL    |                |
            | updated_at       | timestamp       | YES  |     | NULL    |                |
            +------------------+-----------------+------+-----+---------+----------------+

             */
            'batch_id' => 'required',
            'item_category_id' => 'required',
            'model_id' => 'required',
            'employee_id' => 'required',
            'supplier_id' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'batch_id.required' => 'Select Batch, Field is Required',
            'item_category_id.required' => 'Select Item Category, Field is Required',
            'model_id.required' => 'Select Item Model, Field Required',
            'employee_id.required' => 'Select Employee, Field is Required',
            'supplier_id.required' => 'Supplier is Required'
        ];

    }
}
