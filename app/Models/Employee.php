<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'email', 'phone','address' ,'birthday'];

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }
}
