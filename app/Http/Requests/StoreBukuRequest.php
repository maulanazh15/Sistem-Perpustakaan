<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'judul_buku' => 'required|max:255',
            'penulis' => 'required|max:255',
            'kategori' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'jumlah_buku' => 'required',
            'status_buku' => 'required',
            'foto_buku' => 'image|file|max:4000',
        ];
    }
}
