<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminmodel extends Model
{
    protected $table='admin';
    protected $fillable=['username','password'];
    protected $PrimaryKey='aid';
}
