<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'tags', 'owner', 'location', 'email', 'description', 'logo', 'user_id'];
    // Note: make sure this has all the columns if unguard() is not used

    // function to filter
    public function scopeFilter($query, array $filters)
    {
        // for tag
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        // for search
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // function to add relationship To User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // user_id is a column in user table in database
    }
}
