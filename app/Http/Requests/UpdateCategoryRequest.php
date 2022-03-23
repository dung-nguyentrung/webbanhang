<?php

namespace App\Http\Requests;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'name' => [
                'required'
            ],
            'keyword' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'image' => [
                'nullable',
                'image',
                'mimes:jpg,png,jpeg,svg',
                'max:2048'
            ]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên danh mục',
            'keyword' => 'Từ khóa',
            'description' => 'Mô tả',
            'image' => 'Hình ảnh'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được trống',
            'image' => ':attribute phải là hình ảnh',
            'mimes' => ':attribute không đúng định dạng',
            'max' => 'Kích thước ảnh quá lớn'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        Toastr::error($validator->errors()->first(), 'Lỗi', ['timeOut' => 10000]);
    }
}
