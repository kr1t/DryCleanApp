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
    protected $fillable = ['price_sum', 'status', 'order_code', 'pos_code', 'user_id'];

    protected $appends = ['created_at_text'];

    public function getCreatedAtTextAttribute()
    {
        return $this->created_at ? \Carbon\Carbon::parse($this->created_at)->format('d-m-Y H:i') : '-';
    }

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
        return $this->hasOne(OrderInformation::class)->where('type', 1);
    }

    public function informationSend()
    {
        return $this->hasOne(OrderInformation::class)->where('type', 2);
    }

     public function logs()
    {
        return $this->hasOne(OrderLog::class);
    }

}
