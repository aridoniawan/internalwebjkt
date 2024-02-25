<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class MeetingRoom extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
        'room_meeting', 'uname', 'agenda', 'start_time', 'end_time', 
    ];

    public $sortable = [
        'start_time',
    ];
}
