<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'date_of_birth',
        'phone_number',
        'email',
        'branch_address',
    ];
}
