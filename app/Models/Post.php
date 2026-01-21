<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'author_id', 'slug', 'body'];

    protected $guarded = ['id'];

    // eager loading by default
    protected $with = ['category', 'author'];


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
           return $query->where('title', 'like', '%' .$search. '%' );
        });
        $query->when($filters['category'] ?? false, function ($query, $category) {
           return $query->whereHas('category', function(Builder $query) use($category){
            $query->where('slug', $category);

           });
        });
        $query->when($filters['author'] ?? false, function ($query, $author) {
           return $query->whereHas('author', function(Builder $query) use($author){
            $query->where('author_id', $author);

           });
        });
    }

}
