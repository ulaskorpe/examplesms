<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Customer;
class Message extends Model
{
    use HasFactory,SoftDeletes;
    protected $table  = 'messages';

    protected $fillable = ['customer_id','receiver','message','is_sent'];
    public function customer(){
        return $this->hasOne(Customer::class);
    }
}
