<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $table = "customers";

    protected $hidden = [
        "created_at",
        "updated_at" // Corrected column name
    ];

    protected $fillable = [
        'fname',
        'lname',
        'custAddrss' // Corrected column name
    ];
}
