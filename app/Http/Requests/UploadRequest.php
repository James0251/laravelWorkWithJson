<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
        $max_size = 1024;
        return [
            'images' => 'array|required|max_uploaded_file_size:'.$max_size,
            'images.*' => 'mimetypes:image/jpeg,image/png,image/bmp',
        ];
    }
    public function messages()
    {
        return [
          'images.required' => 'Пожалуйста, загрузите 1 или более файлов',
          'images.max_uploaded_file_size' => 'Общий размер файлов не должен превышать 1Mb',
          'images.*.mimetypes' => 'Файл должен быть с расширением jpg, png или bmp',
        ];
    }
}
