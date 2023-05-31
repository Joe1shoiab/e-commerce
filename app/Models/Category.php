<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * The Category model represents a category in the application.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property int|null $parent_id
 * @property \Illuminate\Support\Collection|Product[] $products
 * @property Category|null $parent
 * @property \Illuminate\Support\Collection|Category[] $children
 */
class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'parent_id'];

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }



    /**
     * Get the parent category.
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }




}
