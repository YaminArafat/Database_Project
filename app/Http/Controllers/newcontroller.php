<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class newcontroller extends Controller
{
    public function index()
    {
	$users = DB::select('select id from users');
	foreach ($users as $user) {
			echo $user->id;
		}

    }
}
