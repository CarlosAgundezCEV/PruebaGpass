<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIDeleteController extends Controller
{
    public function destroy(User $user) 
	{
	    return $user->delete();
	}

}
