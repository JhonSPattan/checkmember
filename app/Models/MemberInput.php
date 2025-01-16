<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberInput extends Model
{
    protected $connection = 'secondary';
    protected $table = 'memberinput';
    public $timestamps = false;
    protected $primaryKey = 'IdMember ';
    use HasFactory;
}
