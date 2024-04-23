<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{

    protected $table = 'resources';
    protected $primaryKey ='id';
    protected $fillable =[
            'title',
            'category',
            'brief',
            'image',
            'author',
            'link',
    ];

/**
*  @var array
* */
protected $casts=[
    'category'=>'array'
];
    

    use HasFactory;
}
