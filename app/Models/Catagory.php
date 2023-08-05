<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public $table="catagorys";
    use HasFactory;
    protected $fillable = [
        "name",
       
    ];
}
