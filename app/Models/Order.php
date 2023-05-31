<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



/**
 * The Order model represents an order in the application.
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $country
 * @property string $shipping_method
 * @property float $shipping_amount
 * @property float $tax_amount
 * @property float $total
 * @property string $payment_method
 * @property string $payment_status
 * @property string $status
 * @property string $notes
 * @property \Illuminate\Support\Collection|OrderItem[] $items
 * @property User $user
 */
class Order extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'shipping_method',
        'shipping_amount',
        'tax_amount',
        'total',
        'payment_method',
        'payment_status',
        'status',
        'notes',
    ];


    /**
     * Get the user that owns the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}