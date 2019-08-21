<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'name', 'father_id', 'descendant_level'
    ];
    
    public function scopeDescendants($query, $father_id)
    {
        return $query->where('father_id', $father_id);
    }

    public function scopeMain($query)
    {
        return $query->where('descendant_level', 0);
    }
}
