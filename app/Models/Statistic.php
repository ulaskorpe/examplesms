<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Statistic extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'statistics';
    protected $fillable = ['date','created_msg','sent_msg'];
}
