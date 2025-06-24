<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false; 
    
    protected $fillable = [
        'name',
        'email',
    ];

    public function groups(){
        return $this->belongsToMany(Group::class, 'customer_group');
    }
}

