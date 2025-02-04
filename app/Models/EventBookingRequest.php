<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBookingRequest extends Model
{
    use HasFactory;

   protected $fillable =[
          'status'
    ];

    public function event(){
        return $this->belongsTo(Event::class, 'event_id');
    }
}
