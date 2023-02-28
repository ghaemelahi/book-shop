<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_image extends Model
{
    use HasFactory;
    protected $fillable = ['path_image'];

    protected $table = ['book_images'];
    
    // protected $casts = ['images' => 'array'];

    public function book()
    {
        $this->belongsTo(Books::class,'book_id');
    }
}
