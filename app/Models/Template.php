<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

    protected $table = 'templates';
    protected $primarykey ='id';
    protected $fillable =[
            'file_name',
            'file_path',
            'form_number',
            'section',
    ];
    
    use HasFactory;
}
