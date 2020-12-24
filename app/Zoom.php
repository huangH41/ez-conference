<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    protected $fillable = [
        'participant', 'price', 'zoom_user_id'
    ];

    public function transaction() {
        return $this->hasMany(RentalTransaction::class);
    }
}
