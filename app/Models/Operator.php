<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'engagement_price',
        'description',
        'phone',
        'image',
        'address',
        'foundation_year'
    ];

    public function user(){
    return
        $this->belongsTo(User::class);

   }
   public function specializations(){
    return
    $this->belongsToMany(Specialization::class);
   }
   public function messages(){
    return
    $this->hasMany(Message::class);
   }
   public function reviews(){
    return
    $this->hasMany(Review::class);
   }

    public function sponsorships(){
        return $this->belongsToMany(Sponsorship::class)
        ->withPivot([
            "start_date",
            "end_date"
        ]);
    }
   
}
