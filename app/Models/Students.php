<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\room;

class Students extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'students';
    protected $fillable = [
        'fio',
        'gender',
        'date',
        'group',
        'foreigns',
        'country',
    ];
    public function room() {
        return $this->belongsToMany('App\Models\room', 'room_students', 'students_id', 'room_id');
    }
}
