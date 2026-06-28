<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tennant  extends Authenticatable
{
    protected $guarded = ['id'];
}
