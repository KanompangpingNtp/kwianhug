<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuneralFormReplies extends Model
{
    use HasFactory;

    protected $fillable = ['funeral_id', 'users_id', 'reply_text', 'reply_date'];

    public function details()
    {
        return $this->belongsTo(FoodStorageInformations::class, 'funeral_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
