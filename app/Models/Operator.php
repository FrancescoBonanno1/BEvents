<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
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
}
