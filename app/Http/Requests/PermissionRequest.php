<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'name' => 'required|unique:roles|min:3|max:60',
//            'guard_name' => 'required|min:3|max:60'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '权限不能为空',
            'name.unique' => '权限已存在',
            'name.min' => '权限不能少于3个字符',
            'name.max' => '权限不能大于60个字符',
            'guard_name.required' => '守卫名称不能为空',
            'guard_name.min' => '守卫名称不能少于3个字符',
            'guard_name.max' => '守卫名称不能大于60个字符'
        ];
    }
}
