<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastPaper extends Model
{
    use HasFactory;

    public function series()
    {
        return $this->belongsTo(PastPaperYear::class, 'exam_series')
                    ->select(['id', 'name']);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category')
                    ->select(['id', 'category_name', 'slug']);
    }

    public function subcategories()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory')
                    ->select(['id', 'subcategory_name', 'slug']);
    }

    public function resubcategories()
    {
        return $this->belongsTo(Resubcategory::class, 'resubcategory')
                    ->select(['id', 'resubcategory_name', 'slug']);
    }

}
