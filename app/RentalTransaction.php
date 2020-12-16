<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalTransaction extends Model
{
    public function zoom() {
        return $this->belongsTo(Zoom::class,'zoom_id');
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    protected $fillable = [
      'start_link', 'join_link',
    ];
}
