<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationGeneralForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'date',
        'subject',
        'included',
        'salutation',
        'name',
        'age',
        'house_number',
        'village',
        'subdistrict',
        'district',
        'province',
        'request_details',
        'admin_name_verifier',
        'phone',
        'proceedings',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function grAttachments()
    {
        return $this->hasMany(EducationGeneralFiles::class, 'gr_form_id');
    }

    public function grReplies()
    {
        return $this->hasMany(EducationGeneralReplies::class, 'gr_form_id');
    }
}
