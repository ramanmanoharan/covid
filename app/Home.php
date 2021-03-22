<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
	use SoftDeletes;
	protected $table='homes';
    protected $fillable =['name', 'title', 'description', 'image_name'];
    protected $dates = ['deleted_at'];
}
