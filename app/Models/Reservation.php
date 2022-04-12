<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $casts = [
        'date_start' => 'date', // date = Carbon instance
        'date_end' => 'date',
    ];
    protected $fillable = ['client_id', 'room_id', 'date_start', 'date_end'];

    public function Room() {
        return $this->belongsTo(Room::class);
    }

    public function Client() {
        return $this->belongsTo(Client::class);
    }
}
