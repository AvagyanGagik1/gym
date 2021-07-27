<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateFirstStepRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title_ru'=>'required',
            'title_en'=>'required',
            'title_blr'=>'required',
            'description_ru'=>'required',
            'description_en'=>'required',
            'description_blr'=>'required',
            'image'=>'nullable|image',
            'video_link'=>'required|active_url'
        ];
    }
}
