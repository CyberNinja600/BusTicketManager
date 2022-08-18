<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandRequest extends Model
{
    #brand_requests
    protected $table="brand_requests";
    public $timestamp = false;
}
