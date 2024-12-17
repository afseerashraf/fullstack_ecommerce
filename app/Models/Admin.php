<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;




class Admin extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;

    protected $hidden = 'id';
    protected $fillable = ['name','email','password',];


    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
