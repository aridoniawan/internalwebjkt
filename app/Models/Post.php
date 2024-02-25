<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use HasFactory, Sortable;

    protected $attributes = [
        'link' => null,
    ];


    protected $fillable = [
        'link'
    ];

    public $sortable = [
        'tanggal',
    ];
}
