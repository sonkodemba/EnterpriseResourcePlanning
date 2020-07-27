<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvendFormRequest extends FormRequest
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
        /**
      * +-----------------+-----------------------+------+-----+---------+----------------+
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
        return [
            'meter_num' => 'required| min:6 | max:11',
            'amount' => 'required|numeric|between:35,10000',

        ];
    }

    public function messages()
    {
        return [
            'meter_num.required' => 'Meter Number is  Required',
            'amount.required' => 'Amount is Required',


        ];
    }
}
