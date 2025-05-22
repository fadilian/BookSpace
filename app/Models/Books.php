<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['id','categories_id','title','author','year','stock'];

    public function categories(): BelongsTo{
        return $this->belongsTo(Categories::class, 'categories_id');
    }
}
