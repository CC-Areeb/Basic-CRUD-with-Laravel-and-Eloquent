<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;


    // to avoid snake casing
    // protected $table = 'cars';


    // this is used when our primary key is not an integer 
    // protected $primaryKey = 'name';


    // this is used when we don't want to use a primary key
    // protected $primaryKey = false;


    // this is used when we do not want to use time stamps of created and updated at
    // protected $timestamps = false;
    

    // this is used when we want to use time stamps of created and updated at
    // protected $timestamps = true;


    // customize the date and time format
    // protected $dateFormat = 'h:m:s';


    protected $fillable = ['name', 'founded', 'description'];
}
