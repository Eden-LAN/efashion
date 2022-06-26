<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    public $timestamps = false;
    protected $primaryKey = 'img';
    protected $fillable = ['id','brand', 'color', 'gender', 'category', 'img'];
}
