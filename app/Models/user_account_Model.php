<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class user_account_Model extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

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
