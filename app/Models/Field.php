<?php

namespace App\Models;

use App\Enums\FieldType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id', 'name', 'description', 'required', 'type',
    ];

    protected $casts = [
        'type' => FieldType::class,
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
