<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Customer;
class Os extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'os';

    protected $fillable = ['name'];

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
