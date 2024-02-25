<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_account_Model extends Model
{
    use HasFactory;

    protected $table = 'user_account_data_base';

    protected $fillable = [
        'first-name',
        'last-name',
        'email',
        'AccountNumber',
        'number-phone',
        'street-address',
        'city',
        'region',
        'country',
        'AccountAmount',
        'postal-code',
        'UserAccount',
        'NumberDocument',
        'password',
    ];

    
}
