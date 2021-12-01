<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class JobType extends Model
{
    use HasFactory;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $table = 'jobtypes';

    public $fillable = [
        'title',
        'thumbnail',
        'content',
        'slug',
        'seo_title',
        'seo_description',
    ];
}
