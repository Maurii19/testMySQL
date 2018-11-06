<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MySQLController extends Controller
{
   public function selectUser(){

      $users = DB::select('select * from users');

      return view('index', ['users' => $users]);
	}

	public function insertUser(){
		$isInserted = true;

		$insert = DB::table('users')->insert([
			'name' => 'Peter',
			'age' => 19,
        	'salary' => 1000,
        	'date' => '1999/11/06',
        	'password' => str_random(4),
        	'city' => "Vivo en Zarautz",
        	'paid' => false

    ]);
		return view('index', ['isInserted' => $isInserted]);
	}

	public function updateUser(){
		$isUpdated = true;
		$update = DB::table('users')
            ->where('id', 1)
            ->update(['name' => Merche]);

         return view('index', ['isUpdated' => $isUpdated]); 
	}

	public function deleteUser(){
		$isDeleted = true;
		$delete = DB::table('users')->where('id', 14)->delete();

		return view('index', ['isDeleted' => $isDeleted]); 
	}
}