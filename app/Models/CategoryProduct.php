<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryProduct extends Model
{

    use HasFactory;

    protected $table = 'category_product';
    protected $primaryKey = 'id';

    public $timestaps = false;  // set time to false
    protected $fillable = [
    'name_category'
    ];
}
