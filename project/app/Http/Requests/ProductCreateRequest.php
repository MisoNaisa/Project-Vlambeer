<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductCreateRequest extends Request
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
            'product_id'                => 'max:32|string',
            'product_name'              => 'max:100|string',
            'product_description'       => 'max:500000|string',
            'product_price'             => 'max:32|string',
            'product_sale'              => 'max:32|string',
            'product_sale_percentage'   => 'max:32|string',
            'stock'                     => 'string',
            'product_img'               => 'string',
            'created_at'                => 'string'
        ];
    }
}
