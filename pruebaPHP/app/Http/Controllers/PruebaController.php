<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class PruebaController extends Controller
{
	function welcome(){
		$students = Student::all();
		// foreach ($students as $student) {
		//    echo $student->lastname;
		// }
		return view('welcome')->with('students',$students);
	}
	 function prueba(){

		 return 'Hola soy una prueba';
	 }
}
