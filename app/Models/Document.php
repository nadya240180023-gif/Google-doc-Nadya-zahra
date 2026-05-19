<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'content',
    ];

    // RELATION VERSION HISTORY
    public function versions()
    {
        return $this->hasMany(DocumentVersion::class);
    }
}