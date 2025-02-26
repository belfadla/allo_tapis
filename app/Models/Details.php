<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'type',
        'prix',
        'lieu',
    ];
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
