<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class port extends Model
{
    use HasFactory;
    protected $table = 'port';
    protected $fillable = ['name', 'email', 'subject','message'];
}
