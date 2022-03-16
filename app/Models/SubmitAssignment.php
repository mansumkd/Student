<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitAssignment extends Model
{
    use HasFactory;
    protected $fillable =[
    'semester',
    'branch',
    'subject',
    'question',
    'name',
    'path',
    'date',
    'submitted_by',
    ];
}
