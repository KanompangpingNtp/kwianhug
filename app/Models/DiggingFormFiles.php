<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiggingFormFiles extends Model
{
    use HasFactory;

    protected $fillable = ['digging_id', 'file_path', 'file_type', 'document_type'];


    public function information()
    {
        return $this->belongsTo(DiggingInformations::class, 'digging_id');
    }
}
