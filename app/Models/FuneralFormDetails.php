<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuneralFormDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'funeral_id',
        'salutation_detail_1',
        'fullname_detail_1',
        'phone_number_detail_1',
        'mobile_number_detail_1',
        'age_detail_1',
        'idcard_detail_1',
        'idcard_out_detail_1',
        'idcard_date_detail_1',
        'idcard_end_detail_1',
        'occupation_detail_1',
        'related_detail_1',
        'address_detail_1',
        'village_detail_1',
        'alley_detail_1',
        'road_detail_1',
        'subdistrict_detail_1',
        'district_detail_1',
        'province_detail_1',
        'postal_code_detail_1',
        'address_current_detail_1',
        'village_current_detail_1',
        'alley_current_detail_1',
        'road_current_detail_1',
        'subdistrict_current_detail_1',
        'district_current_detail_1',
        'province_current_detail_1',
        'postal_code_current_detail_1',
        'salutation_detail_2',
        'fullname_detail_2',
        'age_detail_2',
        'idcard_detail_2',
        'dead_remake_detail_2',
        'dead_date_detail_2',
        'certificate_detail_2',
        'certificate_out_detail_2',
        'certificate_date_detail_2',
        'address_detail_2',
        'village_detail_2',
        'alley_detail_2',
        'road_detail_2',
        'subdistrict_detail_2',
        'district_detail_2',
        'province_detail_2',
        'postal_code_detail_2',
        'address_current_detail_2',
        'village_current_detail_2',
        'alley_current_detail_2',
        'road_current_detail_2',
        'subdistrict_current_detail_2',
        'district_current_detail_2',
        'province_current_detail_2',
        'postal_code_current_detail_2',
        'salutation_detail_3',
        'fullname_detail_3',
        'positon_detail_3',
        'org_detail_3',
        'idcard_detail_3',
        'idcard_out_detail_3',
        'idcard_date_detail_3',
        'idcard_end_detail_3',
        'address_detail_3',
        'village_detail_3',
        'alley_detail_3',
        'road_detail_3',
        'subdistrict_detail_3',
        'district_detail_3',
        'province_detail_3',
        'postal_code_detail_3',
        'phone_number_detail_3',
    ];

    public function information()
    {
        return $this->belongsTo(FuneralInformations::class, 'funeral_id');
    }
}
