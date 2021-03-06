<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;

    protected $fillable = [
        'Description',
        'logo',
        'cover_photo',  
    ];

    public $timestamps = false;

    public function events(){
        return $this->hasMany(Events::class,'club_id'); // one to many relationship
    }

    public function members(){
        return $this->hasMany(Members::class,'club_id'); // one to many relationship
    }

    public function notices(){
        return $this->hasMany(Notices::class,'club_id'); // one to many relationship
    }
}
