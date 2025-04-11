<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funeral_form_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funeral_id')->constrained('funeral_informations')->onDelete('cascade');
            $table->text('salutation_detail_1')->nullable();
            $table->text('fullname_detail_1')->nullable();
            $table->text('phone_number_detail_1')->nullable();
            $table->text('mobile_number_detail_1')->nullable();
            $table->text('age_detail_1')->nullable();
            $table->text('idcard_detail_1')->nullable();
            $table->text('idcard_out_detail_1')->nullable();
            $table->text('idcard_date_detail_1')->nullable();
            $table->text('idcard_end_detail_1')->nullable();
            $table->text('occupation_detail_1')->nullable();
            $table->text('related_detail_1')->nullable();
            $table->text('address_detail_1')->nullable();
            $table->text('village_detail_1')->nullable();
            $table->text('alley_detail_1')->nullable();
            $table->text('road_detail_1')->nullable();
            $table->text('subdistrict_detail_1')->nullable();
            $table->text('district_detail_1')->nullable();
            $table->text('province_detail_1')->nullable();
            $table->text('postal_code_detail_1')->nullable();
            $table->text('address_current_detail_1')->nullable();
            $table->text('village_current_detail_1')->nullable();
            $table->text('alley_current_detail_1')->nullable();
            $table->text('road_current_detail_1')->nullable();
            $table->text('subdistrict_current_detail_1')->nullable();
            $table->text('district_current_detail_1')->nullable();
            $table->text('province_current_detail_1')->nullable();
            $table->text('postal_code_current_detail_1')->nullable();
            $table->text('salutation_detail_2')->nullable();
            $table->text('fullname_detail_2')->nullable();
            $table->text('age_detail_2')->nullable();
            $table->text('idcard_detail_2')->nullable();
            $table->text('dead_remake_detail_2')->nullable();
            $table->text('dead_date_detail_2')->nullable();
            $table->text('certificate_detail_2')->nullable();
            $table->text('certificate_out_detail_2')->nullable();
            $table->text('certificate_date_detail_2')->nullable();
            $table->text('address_detail_2')->nullable();
            $table->text('village_detail_2')->nullable();
            $table->text('alley_detail_2')->nullable();
            $table->text('road_detail_2')->nullable();
            $table->text('subdistrict_detail_2')->nullable();
            $table->text('district_detail_2')->nullable();
            $table->text('province_detail_2')->nullable();
            $table->text('postal_code_detail_2')->nullable();
            $table->text('address_current_detail_2')->nullable();
            $table->text('village_current_detail_2')->nullable();
            $table->text('alley_current_detail_2')->nullable();
            $table->text('road_current_detail_2')->nullable();
            $table->text('subdistrict_current_detail_2')->nullable();
            $table->text('district_current_detail_2')->nullable();
            $table->text('province_current_detail_2')->nullable();
            $table->text('postal_code_current_detail_2')->nullable();
            $table->text('salutation_detail_3')->nullable();
            $table->text('fullname_detail_3')->nullable();
            $table->text('positon_detail_3')->nullable();
            $table->text('org_detail_3')->nullable();
            $table->text('idcard_detail_3')->nullable();
            $table->text('idcard_out_detail_3')->nullable();
            $table->text('idcard_date_detail_3')->nullable();
            $table->text('idcard_end_detail_3')->nullable();
            $table->text('address_detail_3')->nullable();
            $table->text('village_detail_3')->nullable();
            $table->text('alley_detail_3')->nullable();
            $table->text('road_detail_3')->nullable();
            $table->text('subdistrict_detail_3')->nullable();
            $table->text('district_detail_3')->nullable();
            $table->text('province_detail_3')->nullable();
            $table->text('postal_code_detail_3')->nullable();
            $table->text('phone_number_detail_3')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funeral_form_details');
    }
};
