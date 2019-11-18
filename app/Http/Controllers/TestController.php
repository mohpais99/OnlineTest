<?php

namespace App\Http\Controllers;

use App\UserTest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {	
    	$user = UserTest::all();
        return view('index')->with('user', $user);
    }

    public function store(Request $request)
    {
    	$get = UserTest::count();

    	$user = new UserTest;
    	$user->name = $request->name;
        if ($get == 0) {
        	$user->parity = 'Odd';
        } else {
        	$test = UserTest::latest('id')->first();
        	if ($test->id % 2 == 0) {
        		$user->parity = 'Odd';
        	} else {
        		$user->parity = 'Event';
        	}
        }
    	$user->save();


        return redirect()->route('index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy($id)
    {
    	$user = UserTest::find($id);
    	$user->delete();

    	return redirect()->route('index')->with('error', 'Data berhasil dihapus!');
    }

}
