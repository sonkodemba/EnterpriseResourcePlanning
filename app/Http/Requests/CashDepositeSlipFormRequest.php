<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CashDepositeSlipFormRequest extends FormRequest
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
            +---------------------+-----------------+------+-----+---------+----------------+
            | Field               | Type            | Null | Key | Default | Extra          |
            +---------------------+-----------------+------+-----+---------+----------------+
            | id                  | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | bank_id             | bigint unsigned | NO   | MUL | NULL    |                |
            | slip_num            | bigint unsigned | NO   |     | NULL    |                |
            | account_num         | int unsigned    | NO   |     | NULL    |                |
            | account_holder_name | varchar(255)    | NO   |     | NULL    |                |
            | curency_type        | varchar(255)    | NO   |     | GMD     |                |
            | amount              | decimal(8,2)    | NO   |     | NULL    |                |
            | depositor_id        | bigint unsigned | NO   | MUL | NULL    |                |
            | deleted_at          | timestamp       | YES  |     | NULL    |                |
            | created_at          | timestamp       | YES  |     | NULL    |                |
            | updated_at          | timestamp       | YES  |     | NULL    |                |
            +---------------------+-----------------+------+-----+---------+----------------+

             */
            'bank_id' => 'required',
            'slip_num' => 'required| unique|min:5 | max:7',
            'account_num' => 'required',
            'amount' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'bank_id.required' =>'Select Bank',
            'slip_num.required' => 'Slip Number is Required',
            'account_num.required' => 'Account Number is Required',
            'amount.required' => 'Account Number is Required'

        ];
    }
}
