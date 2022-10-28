<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $table = 'blog_comments';
    protected $primaryKey = 'id';

    public $timestaps = false;  // set time to false
    protected $fillable = [
    'user_id', 'blog_id', 'messages'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id'); // Tạo function sau đó dùng belongsTo để liên kết khóa ngoại
    }
    public function blog(){
        return $this->belongsTo('App\Models\Blog','blog_id','id'); // Tạo function sau đó dùng belongsTo để liên kết khóa ngoại
    }
}
