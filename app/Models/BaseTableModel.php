<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseTableModel extends Model
{
    use HasFactory;
    protected $table = 'base-table';
    protected $guarded = [];
}
