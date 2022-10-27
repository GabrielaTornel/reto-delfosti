<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected  $primaryKey= 'id';
    protected   $fillable =[
       'name', 'slug'  
    ];
    // use HasFactory;
    public $timestamps = false;
}