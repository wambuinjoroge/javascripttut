<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

}
//shows that the user has a phone
class User extends Model{
	public function phone()
	{
    	return $this->hasOne('App\Phone','foreign_key','local_key');
    	//name of related model,use of foreign  key that isn't the  attribute id of the  child model (snakecase) 
    }
}
//shows that a phone belongs to a user    
class Phone extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
		//name of related model,
	}
    
}
 //ONE TO MANY
 /**
 * 
 */
 class Faculty extends Model
 	{
 		# code...
 		public function student()
 		{
 		return $this->hasMany('App\Student');
 	    }
  	}
/**
* 
*/
class Student extends Model
{
		# code...
	public function faculty()
	{
      return $this->belongsTo('App\Faculty');
	}
}
 }
