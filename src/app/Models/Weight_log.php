<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight_log extends Model
{
    use HasFactory;
    protected $table = 'weightlogs';
    protected $fillable = ['date', 'weight', 'target_weight','calories','exircise_time'];

}
