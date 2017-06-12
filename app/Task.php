<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['name', 'group', 'notes', 'dueDate', 'status', 'priority'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function group()
    {
    	return $this->belongsTo('App\Group');
    }
}
