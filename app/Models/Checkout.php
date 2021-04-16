<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
  protected $table = 'checkouts';
  protected $primaryKey = 'id';
  public $incrementing = true;
  public $timestamps = true;
  protected $fillable = [
      'user_id', 'book_id',
];
   public function user()
    {
        return $this->belongsTo(User::class);
    }
   public function book()
    {
        return $this->belongsTo(Book::class);
    }
  
}

