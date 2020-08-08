<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviewmodel extends Model
{
    protected $table='mt';
    protected $fillable=['mname','mcategory','mlanguage','mdescription','mimage','mrate','mreview'];
    protected $PrimaryKey='mid';

}
