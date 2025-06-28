<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false; 

    protected $fillable = [
        'name',
    ];

    /**
     * Many-to-many relation with customers.
     */
    public function customers(){
        return $this->belongsToMany(Customer::class, 'customer_group');
    }
}
