<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public $timestaps = false;
    use HasFactory;
    public function gender_desc(){
        return $this->hasOne(User::class);
    }
}
