<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inquiry extends Model
{
    use HasFactory;

    const STATUS_NEW = 'new';
    const STATUS_PROCESSING = 'processing';
    const STATUS_DONE = 'done';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'page',
        'status',
    ];

    public function scopeNew($query)
    {
        return $query->where('status', self::STATUS_NEW);
    }

    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderBy('created_at', 'desc')->limit($limit);
    }

    public function getStatusLabelAttribute()
    {
        return match($this->status) {
            self::STATUS_NEW => 'Yeni',
            self::STATUS_PROCESSING => 'İşlənir',
            self::STATUS_DONE => 'Tamamlandı',
            default => $this->status,
        };
    }
}