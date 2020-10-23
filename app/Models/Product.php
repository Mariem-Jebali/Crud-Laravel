<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{protected $table = 'products';
    public $timestamps = true;
    use HasFactory;
    protected $fillable = [
     'name','description','price','created_at'
      ];
  
}
