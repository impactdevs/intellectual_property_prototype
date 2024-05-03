<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Resources extends Model
{

    use Sluggable;
    
    protected $table = 'resources';
    protected $primaryKey ='id';
    protected $fillable =[
            'title',
            'category',
            'slug',
            'short_description',
            'body',
            
    ];

    public function Sluggable():array
    {

        return[
            'slug'=>['source'=>'title']
        ];
    }

/**
*  @var array
* */
protected $casts=[
    'category'=>'array'
];
    

    use HasFactory;
}
