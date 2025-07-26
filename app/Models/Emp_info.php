<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp_info extends Model
{
    use HasFactory;
    protected $table= 'emp_info';
    protected $fillable = ['fname', 'lname', 'mname','birthdate','gender',
        'marital_stat', 'contactNum', 'address',
        ];
}
