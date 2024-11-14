<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Carbon\Carbon;

class Project extends Model
{

    use Translatable;
    protected $translatable = ['project_address','project_description'];

    protected $guarded = [];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function date_of_completion(){
        return $this->created_at->format('M/d/Y');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function date_of_completation(){
        $formattedDate = Carbon::parse($this->project_date_of_completion)->format('M/d/Y');
        return $formattedDate;
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }



}
