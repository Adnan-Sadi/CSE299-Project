<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $primaryKey = 'event_id';

    protected $dates = ['event_date'];

        protected $fillable = [
        'club_id',
        'event_name',
        'event_description',
        'event_date',
        'cover_photo',
        'start_at',
        'end_at',
        'about_image',  
    ];

    public function clubs(){
        return $this->belongsTo(Clubs::class,'club_id');
    }

    public function event_photos(){
        return $this->hasMany(Event_Photos::class,'event_id'); // one to many relationship
    }

}
