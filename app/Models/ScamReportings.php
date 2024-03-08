<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScamReportings extends Model
{
    use HasFactory;
    protected $table='scam_reports';

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'message',
        'wallet_addresses',
        'transaction_date',
        'deposit_method',
        'lost_amount',
        'country',
    ];
}
