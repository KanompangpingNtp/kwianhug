<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuneralFormFiles extends Model
{
    use HasFactory;

    protected $fillable = ['funeral_id', 'file_path', 'file_type'];

    public function information()
    {
        return $this->belongsTo(FuneralInformations::class, 'funeral_id');
    }
}
