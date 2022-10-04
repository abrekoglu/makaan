<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'property_type', 'sell_type', 'address', 'city', 'town', 'rooms', 'baths', 'square', 'price', 'description', 'image'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['property_types'] ?? false) {
            $query->where('property_type', 'like', '%' . request('property_types') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('property_type', 'like', '%' . request('search') . '%')
            ->orWhere('title', 'like', '%' . request('search') . '%')
            ->orWhere('sell_type', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('city', 'like', '%' . request('search') . '%')
            ->orWhere('town', 'like', '%' . request('search') . '%')
            ->orWhere('address', 'like', '%' . request('search') . '%');
        }
    }
}
