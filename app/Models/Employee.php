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
    protected  $fillable=['name','gender','date','idcard','hiredate','position','graduate','salary','phone','address','images'];
}
