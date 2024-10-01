<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['name','status','link','image','description','prioty','position'];

    /**
     * Get all of the products for the Banner
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Comment::class, 'category_id', 'id');
    }
    
    public function scopegetBanner($q, $pos = 'top-banner'){
    //    $q = $q->where('position', $pos);
        $q = $q->where('position', $pos)
        ->where('status','1')->orderBy('prioty', 'ASC');
       return $q;
    }



}
