<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp_info extends Model
{
    use HasFactory;
    protected $table= 'emp_info';
    protected $primaryKey = 'emp_id';
    protected $fillable = ['first_name', 'last_name', 'middle_name','birth_date','gender',
        'marital_status', 'contact_number', 'address',
        ];
    public function employment()
    {
        return $this->hasOne(Employment_info::class, 'employee_id', 'emp_id');
    }

    public function department()
    {
        return $this->hasOne(Department::class, 'employee_id', 'emp_id');
    }

}
