<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    public function transaction() {
        return $this->hasMany(Transaction::class);
    }
}