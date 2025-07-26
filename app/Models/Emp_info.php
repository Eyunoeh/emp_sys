<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp_info extends Model
{
    use HasFactory;
    protected $table= 'emp_info';
    protected $fillable = ['first_name', 'last_name', 'middle_name','birth_date','gender',
        'marital_status', 'contact_number', 'address',
        ];
}
