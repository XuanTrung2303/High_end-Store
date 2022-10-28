<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $primaryKey = 'id';

    public $timestaps = false;  // set time to false
    protected $fillable = [
    'order_id', 'product_id', 'qty', 'order_price'
    ];

    public function order(){
        return $this->belongsTo('App\Models\Order','order_id','id'); // Tạo function sau đó dùng belongsTo để liên kết khóa ngoại
    }
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id','id'); // Tạo function sau đó dùng belongsTo để liên kết khóa ngoại
    }
}
