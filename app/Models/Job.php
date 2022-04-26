<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['job_type_id','title','description','thumbnail'];

    public function job_category() {
        return $this->belongsTo(JobCategory::class, 'job_type_id','id');
    }
}
