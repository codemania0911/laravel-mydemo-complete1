<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    //
    protected $table = 'diet';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'image_url',
        'video',
        'area',
        'country',
        'kcal',
        'time',
        'material',
        'division'
    ];
}
