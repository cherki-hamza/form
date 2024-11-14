<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{

    public function project(){
        return $this->hasOne(Project::class);
    }

}
