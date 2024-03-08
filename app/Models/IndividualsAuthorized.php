<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualsAuthorized extends Model
{
    use HasFactory;
    protected $table='individuals_authorized';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'reference_number',
        'previous_name',
        'known_as',
        'phone_number',
        'roles',
        'firm_name',
        'involvement_type',
        'effective_from',
        'connection',
        'address',
    ];
}
