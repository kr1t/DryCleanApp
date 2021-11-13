<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInformation extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','tel','address','date','time','type','order_id'];

}
