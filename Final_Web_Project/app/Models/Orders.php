<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    
    protected $primaryKey ='orderID';
    protected $fillable =['orderDate','details'];
    public $timestamps =false;
}
