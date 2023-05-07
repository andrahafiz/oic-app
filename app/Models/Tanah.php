<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tanah extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "tanahs";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'project', 'thing', 'price', 'location', 'condition', 'date_buy'
    ];
    protected $dates = [
        'date_buy'
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class, 'project', 'id');
    }
}
