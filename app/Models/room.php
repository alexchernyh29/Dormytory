<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'room';
    protected $fillable = [
        'number',
        'section',
        'place',
    ];

    public function students () {
        return $this->belongsToMany('App\Models\Students', 'room_students',  'room_id', 'students_id');
    }
}
