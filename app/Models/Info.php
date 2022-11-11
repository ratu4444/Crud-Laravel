<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $table = 'informations';

    protected $gurded = ['id'];

    protected $fillable = [
        'name','email', 'password'
    ];
}
