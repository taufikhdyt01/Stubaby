<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Konten extends Model
{

    use HasFactory;

    protected $table = 'konten';

    protected $fillable = ['judul', 'attachment', 'content', 'media', 'user_id'];

}
