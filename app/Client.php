<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Client extends Model
{

    use Translatable;
    protected $translatable = ['full_name'];

    protected $guarded = [];

}
