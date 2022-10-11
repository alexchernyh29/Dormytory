<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_students extends Model
{
    use HasFactory;
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'room_students';
    protected $fillable = [
        'number',
        'fio',
    ];
}
