<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class database2 extends Model
{
    protected $table = 'database2';
    public $timestamps = false;

    protected $primaryKey = "unid";
    use HasFactory;
}
