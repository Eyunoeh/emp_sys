<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment_info extends Model
{
    use HasFactory;
    protected $table = 'employment_info';
    protected $primaryKey = 'created_at';
    protected $fillable = ['employment_status', 'employeeID', 'dateHired',
        'regularization', 'contract_end', 'companyEmail', 'alternativeEmail',
        'Rate', 'employee_id'];
}
