<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required|unique:roles|min:3|max:12',
//            'guard_name' => 'required|min:3|max:12'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '角色不能为空',
            'name.unique' => '角色已存在',
            'name.min' => '角色不能少于3个字符',
            'name.max' => '角色不能大于12个字符',
            'guard_name.required' => '守卫名称不能为空',
            'guard_name.min' => '守卫名称不能少于3个字符',
            'guard_name.max' => '守卫名称不能大于12个字符'
        ];
    }
}
