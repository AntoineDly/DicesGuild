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
        'name', 'description', 'keywords'
    ];
	
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

	public function user()
    {
        return $this->belongsTo(User::class);
    }
}
