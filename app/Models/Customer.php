<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'home_id', 'amount', 'tel', 'time_start', 'time_end', 'date', 'area', 'type', 'created_at', 'updated_at', 'is_check',
    ];
}
