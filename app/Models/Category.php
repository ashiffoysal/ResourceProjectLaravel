<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function scopeNotDeleted($query){
        return $query->where('is_deleted', 0);
    }
    public function scopeNotActive($query){
        return $query->where('is_active', 1);
    }

    public function allsubcategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id')->select(['id','subcategory_name','slug']);
    }

}
