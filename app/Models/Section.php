<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'section';

    protected $fillable = [
        'name'
    ];
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
