<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestaps = false;
    use HasFactory;
    public function item_id(){
        return $this->hasMany(Item::class);
    }
    public function account_id(){
        return $this->hasOne(User::class);
    }
}
