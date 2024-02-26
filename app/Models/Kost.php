<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Kost extends Model
{
    use HasFactory, Sortable;

    public $sortable = [
        'tanggal',
    ];
}
