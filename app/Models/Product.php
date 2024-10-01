<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','price','sale_price','image','category_id','description'];

    /**
     * Get the category associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cat(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
