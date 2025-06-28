<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false; 

    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * Many-to-many relation with groups.
     */
    public function groups(){
        return $this->belongsToMany(Group::class, 'customer_group');
    }
}

