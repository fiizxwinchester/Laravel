@extends('master')
@section('content')
	<?php
			echo $studentview->firstname;

			//foreach ($studentview->getStudentClass as $class){
			foreach ($studentclass as $class){
				echo $class->classname;
			}
	?>

@stop