<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descrription',
        'employee_id',
        'type_id',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id','id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class,'type_id','id');

    }
}
