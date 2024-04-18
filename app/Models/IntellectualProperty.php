<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntellectualProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_type',
        'category',
        'description',
        'status',
        'documents_id',
        'user_id',
    ];
}
