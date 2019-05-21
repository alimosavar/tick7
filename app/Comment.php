<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'parent_id', 'description', 'status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        $this->belongsTo(Product::class);
    }
}
