<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';

    public $timestaps = false;  // set time to false
    protected $fillable = [
    'user_id', 'date_order', 'order_status'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id'); // Tạo function sau đó dùng belongsTo để liên kết khóa ngoại
    }
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id','id'); // Tạo function sau đó dùng belongsTo để liên kết khóa ngoại
    }
}
