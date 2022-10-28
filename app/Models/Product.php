<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    public $timestaps = false;  // set time to false
    protected $fillable = [
    'name_product', 'description', 'content', 'price', 'qty', 'discount', 'weight', 'sku', 'featured', 'tag','brand_id', 'product_category_id'
    ];

    public function category_product(){
        return $this->belongsTo('App\Models\CategoryProduct','product_category_id','id'); // Tạo function sau đó dùng belongsTo để liên kết khóa ngoại
    }
    public function brand(){
        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }
}
