<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /*because in laravel we can't massFill our column, so we create fillable
     to solve that, our column that doesn't include in our array will be
    fill with default value in migration table also that column cannot be
    fill*/
//    protected $fillable = ['title', 'execert', 'body'];

    /*different with fillable, guarded in laravel can't be filled and other
    column except that will be filled from user*/
    protected $guarded = ['id'];
    /*you can use one way from two-way above, more recommend if we use guarded*/
}
