<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Os;
use App\Models\Country;
use App\Models\Message;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Customer  extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory,SoftDeletes;
    protected $table  = 'customers';

    protected $fillable = ['name','email','address' ,'os_id','country_id'];

    public function country(){
        return $this->hasOne(Country::class);
    }

    public function os(){
        return $this->hasOne(Os::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
 
   /**
    * Get the identifier that will be stored in the subject claim of the JWT.
    *
    * @return mixed
    */
   public function getJWTIdentifier()
   {
       return $this->getKey();
   }

   /**
    * Return a key value array, containing any custom claims to be added to the JWT.
    *
    * @return array
    */
   public function getJWTCustomClaims()
   {
       return [];
   }
}
