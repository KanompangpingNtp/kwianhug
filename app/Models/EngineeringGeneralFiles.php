<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineeringGeneralFiles extends Model
{
    use HasFactory;

    protected $fillable = ['gr_form_id', 'file_path', 'file_type'];

    public function gerForm()
    {
        return $this->belongsTo(EngineeringGeneralForm::class, 'gr_form_id');
    }
}
