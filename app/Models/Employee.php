<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Employee extends Model
{
    use HasFactory;
    protected  $fillable=['name','gender','dob','idcard','date_in','graduate','position','salary','phone','address','image'];

}
