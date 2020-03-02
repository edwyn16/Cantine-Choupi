<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    public function product() {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
