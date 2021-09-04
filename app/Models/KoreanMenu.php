<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoreanMenu extends Model
{
    protected $table = 'k_foods';
    protected $fillable = ['type','description','quantity','price'];
    use HasFactory;
}
