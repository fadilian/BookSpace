<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Returns extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table = 'returns';
    protected $primaryKey = 'id';
    protected $fillable = ['id','borrowings_id','date_return','penalty'];

    public function borrowings(): BelongsTo{
        return $this->belongsTo(Returns::class);
    }
}
