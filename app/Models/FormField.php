<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormField extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_page_id',
        'label',
        'name',
        'type',
        'required',
        'order_column',
    ];

    public function formPage()
    {
        return $this->belongsTo(\App\Models\FormPage::class);
    }
}
