<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developers extends Model
{
    use HasFactory;
    protected $fillable = ['developerName', 'occupation', 'position', 'skill'];
    protected $primaryKey = 'developerID';
    public $timestamps = false;
}
