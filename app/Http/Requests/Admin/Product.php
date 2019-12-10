<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
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
        $array = [];
        if($this->get('id') != null){
            $array = [  


                    'name'   => 'required|string|min:4|max:255',
                    'content' => 'required|string|min:10',
                    'image'   => 'required|boolean',
                    'category_id'=>'required|integer',
                    'brand_id'=>'required|integer',
                    'seo_keys'=>'nullable',
                    'seo_desc'=>'nullable',
                    'price'   =>'required',
                   
        ];
        
        }else{
            
            $array = [  

                
                'name'   => 'required|string|min:4|max:255',
                'content' => 'required|string|min:10',
                'image'   => 'required|boolean',
                'category_id'=>'required|integer',
                'brand_id'=>'required|integer',
                'seo_keys'=>'nullable',
                'seo_desc'=>'nullable',
                'price'   =>'required',
                   
               
            ];

        }
        return $array;
    }
    
    
}
