<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /** @use HasFactory<\Database\Factories\MemberFactory> */
    use HasFactory;

    protected $fillable = ['name', 'phone', 'address'];

    public function borrowedBooks()
    {
        return $this->hasMany(Book::class, 'borrowed_by');
    }
}
