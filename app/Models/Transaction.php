<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Transaction extends Model
{
    use HasFactory;
    protected $table='transactions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'account',
        'wallet',
        'btc_amount',
        'status',
        'liabilities',
    ];
}
