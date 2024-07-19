<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Catch_;

class Deck extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function card() {
        return $this->hasMany(Card::class);
    }
}
