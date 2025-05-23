<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgStructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'files_path',
        'files_type'
    ];
}
