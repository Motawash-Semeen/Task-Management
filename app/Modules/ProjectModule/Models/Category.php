<?php

namespace App\Modules\ProjectModule\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    public function task(){
        return $this->hasMany('App\Modules\TaskModule\Models\Tasks', 'category_id');
    }
}
