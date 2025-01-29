<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'short_description',
        'description',
        'ticket_price',
        'event_address',
        'map_location',
        'event_start_date',
        'event_end_date',
        'event_start_time',
        'event_end_time',
        'banner_image',
        'slider_image',
        'created_by',
        'updated_by',
    
        

    ];

    public function user(){

        return $this->belongsTo(User::class , 'created_by');
    }

    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }

}
