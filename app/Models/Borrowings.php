<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrowings extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table='borrowings';
    protected $primaryKey= 'id';
    protected $fillable=['id','user_id','books_id','date_borrow','date_return','status'];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function books(): BelongsTo{
        return $this->belongsTo(Books::class);
    }
}
