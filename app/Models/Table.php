<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $table = "biodata";
    protected $fillable = [
        'tregist',
        'tname',
        'temail',
        'tphone_number',
    ];
    protected $primaryKey = "id";

    public $timestamps = false;
}
