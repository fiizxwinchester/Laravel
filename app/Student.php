<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
	static function getStudent($id){
  	  $student = Student::find($id);
  	  return $student;

	}
	public function getStudentClass(){
		return $this->BelongsToMany('App\Course'); //join
	}
}
