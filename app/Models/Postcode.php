<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;

class Postcode extends Model
{
    use HasFactory;

    protected $table = 'postcodes';

    protected $primaryKey = 'id';

    public function country()
   {
       return $this->belongsTo(Country::class, 'id');
   }
}
