<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'org_id',
        'org_id',
        'geohash_3',
        'geohash_4',
        'geohash_5',
        'geohash_6',
        'geohash_7',
        'geohash_8',
        'geohash_9'
    ];

}
