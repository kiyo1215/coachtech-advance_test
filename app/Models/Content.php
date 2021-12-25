<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = 'contents';
    protected $fillable =
    [
        'last_name',
        'first_name',
        'gender',
        'email',
        'postcode',
        'address',
        'buolding_name',
        'opinion'
    ];
}
