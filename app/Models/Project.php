<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'site_manager',
        'invest_capital',
        'invest_non_capital',
        'depreciation',
        'tax',
    ];
}
