<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'socio',
        'email_verified_at'
    ];
    public $timestamps = false;
}
