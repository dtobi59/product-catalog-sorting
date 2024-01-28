<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define other properties that are mass-assignable
    protected $fillable = ['id','name', 'price', 'created','sales_count','views_count'];

    
}
