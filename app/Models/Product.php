<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * The Product model represents a product in the application.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property float $price
 * @property int $category_id
 * @property int $quantity
 * @property string $image
 * @property int $featured
 * @property int $active
 * @property \Illuminate\Support\Collection|OrderItem[] $orderItems
 * @property Category $category
 */

class Product extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'price', 'category_id', 'quantity', 'image', 'featured', 'active'];



}