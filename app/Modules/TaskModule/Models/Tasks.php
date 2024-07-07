<?php

namespace App\Modules\TaskModule\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $id = 'id';

    public function category(){
        return $this->belongsTo('App\Modules\ProjectModule\Models\Category', 'category_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_ids');
    }
}
