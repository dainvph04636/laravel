<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomRequest extends FormRequest
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
            'name' => 'required|string|min:8',
            'teacher_name' => 'required|string|min:5|max:32',
            'major' => 'required|string',
            'max_student' => 'nullable|numeric',
        ];

    }
    public function messages()
    {

        return [
            'name.required' => 'Yeu cau nhap ten lop',
            'name.string' => 'Ten lop phai la 1 chuoi ky tu',
            'name.min' => 'Ten lop toi thieu phai 8 ky tu',
            
            'teacher_name.required' => 'Yeu cau nhap ten giao vien',
            'teacher_name.string' => 'Ten giao vien phai la 1 chuoi ky tu',
            'teacher_name.min' => 'Ten giao vien toi thieu phai 5 ky tu',
            'teacher_name.max' => 'Ten giao vien toi da chi 32 ky tu',
        ];

    }

}
