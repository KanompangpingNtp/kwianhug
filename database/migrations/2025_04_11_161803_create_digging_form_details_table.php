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
        Schema::create('digging_form_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('digging_id')->constrained('digging_informations')->onDelete('cascade');
            $table->string('fullname_address')->nullable();
            $table->string('fullname_design')->nullable();
            $table->string('fullname_control')->nullable();
            $table->string('desire_detail')->nullable();
            $table->string('mouth_area')->nullable();
            $table->string('area_detail')->nullable();
            $table->string('document_permission')->nullable();
            $table->string('road_detail')->nullable();
            $table->string('village_detail')->nullable();
            $table->string('alley_detail')->nullable();
            $table->string('subdistrict_detail')->nullable();
            $table->string('district_detail')->nullable();
            $table->string('province_detail')->nullable();
            $table->string('postal_code_detail')->nullable();
            $table->string('name_district_detail')->nullable();
            $table->string('fix_day_detail')->nullable();
            $table->string('document_option')->nullable();
            $table->string('document_option_detail')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digging_form_details');
    }
};
