<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = "books";
    use HasFactory;
    protected $fillable = [
        "title",
        "price",
        "description",
        "pic"
    ];

}
