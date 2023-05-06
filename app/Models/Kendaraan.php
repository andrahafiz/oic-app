<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "kendaraans";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'inventory_card', 'project', 'price', 'location', 'condition', 'loan_date', 'buy_date', 'description', 'user'
    ];
    protected $dates = [
        'loan_date',
        'buy_date'
    ];
}
