<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable=['name','description','category','price','qnt'];
    public $timestamps = false;
    
}