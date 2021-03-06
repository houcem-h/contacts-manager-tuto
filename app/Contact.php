<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Contact extends Model
{
    protected $guarded =  [];

    protected $dates = ['birthday'];

    public function setBirthdayAttribute($birthday)
    {
        $this->attributes['birthday'] = Carbon::parse($birthday);
    }

    public function scopeBirthday($query)
    {
        return $query->where('birthday', 'like', '%-'.date('m').'-%');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
