<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    protected $fillable = ['price_sum','status','order_code','pos_code','user_id'];
    public function services()
    {
        return $this->hasMany(OrderService::class);
    }

    public function informations()
    {
        return $this->hasMany(OrderInformation::class);
    }

     public function informationRequest()
    {
        return $this->hasOne(OrderInformation::class)->where('type',1);
    }

        public function informationSend()
    {
        return $this->hasOne(OrderInformation::class)->where('type',2);
    }
  
}
