<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Customer;
class Country extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'countries';

    protected $fillable = ['name'];

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
