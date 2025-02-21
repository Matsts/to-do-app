<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Task;
class category extends Model
{
    use HasFactory;

    //task relation
    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

    protected $fillable = ["title", "team_id"];

}
