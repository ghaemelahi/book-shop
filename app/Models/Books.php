<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_name',
        'book_title',
        'book_writer',
        'status',
        'translator',
        'print_publisher',
        'year_of_publication',
        'format_book',
        'electronic_price',
        'description',
    ];
    protected $table = 'books';

    public function images(){
        return $this->hasMany(Book_Image::class,'books_id');
    }
}
