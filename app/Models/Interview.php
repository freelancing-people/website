<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'founded_in', 'based_in', 'founders', 'employees', 'body', 'published', 'avatar'];

    protected $appends = ['status'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getStatusAttribute()
    {
        return $this->isPublished() ? 'Published' : 'Draft';
    }

    public function isPublished()
    {
        return $this->published;
    }
}