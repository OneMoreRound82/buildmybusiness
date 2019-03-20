<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = ['task','module_id','url' ,'task_num','completed'];

    public function module()
    {
    	return $this->belongsTo(Module::class);
    }
}
