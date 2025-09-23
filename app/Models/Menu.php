<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'items',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    public static function getByName(string $name)
    {
        return static::where('name', $name)->first();
    }

    public function getItemsAttribute($value)
    {
        $items = json_decode($value, true) ?? [];
        
        // Sort by order
        usort($items, function($a, $b) {
            return ($a['order'] ?? 0) <=> ($b['order'] ?? 0);
        });

        return $items;
    }
}