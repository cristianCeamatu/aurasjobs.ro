<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //All the forms submits they are not guarding inputs because al facades are extending this Model class
    protected $guarded = [];
}
