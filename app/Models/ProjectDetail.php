<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    protected $table = 'projectdetail';

    protected $fillable = [
        'project_id',
        'year',
        'production',
        'income',
        'invest_capital',
        'invest_non_capital',
        'operational',
        'depreciation',
        'taxable_income',
        'tax',
        'ncf',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
