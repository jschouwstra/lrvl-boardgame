<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;

class GameRequest extends Request
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
        'name'          => 'required|
                            unique:games,name,NULL,id,user_id,'.\Auth::user()->id,

        'category_id'   => 'required'   
        ];
    }
}
