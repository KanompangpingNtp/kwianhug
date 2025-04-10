<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiggingFormDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'digging_id',
        'fullname_address',
        'fullname_design',
        'fullname_control',
        'desire_detail',
        'mouth_area',
        'area_detail',
        'document_permission',
        'road_detail',
        'village_detail',
        'alley_detail',
        'subdistrict_detail',
        'district_detail',
        'province_detail',
        'postal_code_detail',
        'name_district_detail',
        'fix_day_detail',
        'document_option',
        'document_option_detail',
        'status'
    ];

    public function information()
    {
        return $this->belongsTo(DiggingInformations::class, 'digging_id');
    }
}
