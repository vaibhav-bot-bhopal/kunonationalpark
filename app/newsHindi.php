<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class newsHindi extends Model
{
    protected $table = 'newshindi';

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'news_slug' => [
                'source' => 'n_title'
            ]
        ];
    }
}
