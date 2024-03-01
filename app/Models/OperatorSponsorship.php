<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorSponsorship extends Model
{
    use HasFactory;

    
    public function sponsorship()
    {
        return $this->belongsToMany(Sponsorship::class)->using(OperatorSponsorship::class);
    }

    public function operator()
    {
        return $this->belongsToMany(Operator::class)->using(OperatorSponsorship::class);
    }
}
