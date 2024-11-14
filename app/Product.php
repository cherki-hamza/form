<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{

    use Translatable;
    protected $translatable = ['name','description'];

    protected $guarded = [];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    /*
      <select class="form-control" name="productsStatus[]" id="productsStatus">
        <option value="0">🚧 Still in Construction</option>
        <option value="1">✅ Completed</option>
        <option value="2">❌ Not Completed</option>
      </select>
    */

    public function my_status(){
        if($this->status == 0){
          return '🚧 Still in Construction';
        }elseif($this->status == 1){
            return '✅ Completed';
        }else{
            return '❌ Not Completed';
        }
    }

}
