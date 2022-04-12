<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function Adress() {
        return $this->belongsTo(Adress::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
