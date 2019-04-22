<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Player extends Model 
{

    /**
     * scopeSearchNames
     *
     * @param  $query
     * @param  request input $name
     *
     * @return void
     */
    public function scopeSearchNames($query, $name)
    {
        //concat first_name and last_name and search
        return $query->where(DB::raw('concat(first_name," ",last_name)'), 'LIKE', '%'.$name.'%');

    }

}

    