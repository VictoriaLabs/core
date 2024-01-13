<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OauthServices extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        "active" => "boolean",
    ];
}
