<?php

namespace App\Models;
// Add
use Jenssegers\Mongodb\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
 //   use HasFactory;
	protected $connection = 'mongodb';
	protected $collection = 'book_posts'; // 
	protected $fillable = [
		'id',
		'title',
		'author',
		'year',
		'genre',
		'publisher',
		'isbn',
	];
	protected $guarded = [
		'_id'
	];
}
