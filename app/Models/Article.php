<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article';

    protected $fillable = [
        'title', 'description', 'keywords', 'slug', 'section_id', 'users_id'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
	
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

	public function users()
    {
        return $this->belongsTo(User::class);
    }
}
