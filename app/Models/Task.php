<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\category;

class Task extends Model
{
    use HasFactory;

    //category relation
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = ["title", "desc", "category_id", "team_id", "created_by"];
}
