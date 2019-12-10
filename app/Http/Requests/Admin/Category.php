<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Category extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
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
                'name' => 'required|string|min:4|max:255',
                'description' => 'required|string|min:10',
                'image' => 'nullable|image|mimes:png,jpg,jpeg',
               
        ];
        
        }else{
            $array = [  

                'name' => 'required|string|min:4|max:255',
                'description' => 'required|string|min:10',
                'image' => 'nullable|image|mimes:png,jpg,jpeg',
          
            ];

        }
        return $array;
    

    }
}
