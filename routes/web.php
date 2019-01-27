<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$tasks = [
		'Go to the store',
		'Go to the market',
		'Go to work',
		'Go to concerte'
	];
	return view('welcome')->withTasks($tasks)->withFoo('foo'); //WithFoo and with task is the same as commented line below
####################################################################################################################################
    // return view('welcome', [
    // 	'tasks' => $tasks,
    // 	'foo' => 'foobar' //'<script>alert("foobar")</script>'
    // ]);
     //or you can like this
    //return view('welcome')->withTasks([
    //'Go to the store',
	// 'Go to the market',
	// 'Go to work',
	// 'Go to concerte'
	//]);
	//or 
	//return view('welcome')->with([
	// 'foo' => 'bar',
	// 'tasks' => ['some task']
	// ]);
   #################################################################################################################################### 
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function () { //example.com/contact
    return view('contact');
});

