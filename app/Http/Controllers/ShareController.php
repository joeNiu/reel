<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShareController extends Controller
{
	public function show(User $user) 
	{
		return view('jobs.share', [
			'user' => $user,
			'jobs' => $user->jobs,
		]);
	}
}