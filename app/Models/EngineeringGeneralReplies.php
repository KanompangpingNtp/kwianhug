<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineeringGeneralReplies extends Model
{
    use HasFactory;

    protected $fillable = ['gr_form_id', 'users_id', 'reply_text', 'reply_date'];

    public function grForm()
    {
        return $this->belongsTo(EngineeringGeneralForm::class, 'gr_form_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
