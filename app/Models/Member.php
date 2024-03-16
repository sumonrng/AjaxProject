<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $guarded = [];
    public $timestaps = false;
    // protected $fillable = [
    //     'name', 'email', 'mobile','password'
    // ] ;
}
