<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = ['user_id', 'project_id', 'task_id', 'action_id','response', 'table_name'];

    public function project()
     {
     	return $this->belongsTo(Project::class);
     }
}
