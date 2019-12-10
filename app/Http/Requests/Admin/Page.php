<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Page extends FormRequest
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

                'title'   => 'required|string|min:4|max:255',
                'content' => 'required|string|min:10',
                'image'   => 'required|boolean',
               
        ];
        
        }else{
            $array = [  

                
                'title'   => 'required|string|min:4|max:255',
                'content' => 'required|string|min:10',
                'image'   => 'required|boolean',
               
            ];

        }
        return $array;
    }
    
}
