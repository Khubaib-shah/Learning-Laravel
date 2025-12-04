<?php

namespace App\Models;
// run this command to use alaqueen method much easier and cleaner
// php artisan make:model Listing 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // To submit the form values  we sue this to add our values in to the data base this is required OR we an use Model::unguard(); Into the AppServiceProvider In the boot function 
    protected $fillable = ['title', 'company', 'tags', 'location', 'email', 'website', 'description', 'logo', 'user_id'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }

        // dd(request('search'));

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }

    }

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
