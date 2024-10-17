<?php

namespace App\Models;

use App\Models\Catogry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'catogry_id','user_id', 'description'];

    public function catogry()
    {
        return $this->belongsTo(Catogry::class);
    }
}
