<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    //mass assignment

    protected $guarded= [''];

    public function profileImage(){


        $imagePath = ($this->image) ?  $this->image :'profile/5TDVkX0PNxKpKbE9FaZRmRrF4fbG5OdmPRUZeBQk.png';
        return '/storage/'.$imagePath ;
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
