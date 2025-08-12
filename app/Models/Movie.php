<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Client\Request;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name',	'synopsis',	'year',	'category',	'cover_image',	'trailer_link'];

    public function category(): BelongsTo {
        return $this->belongsTo('App\Models\Category');
    }

    // public function create(Request $request) {
    //     return $this->create($request->all());
    // }
}
