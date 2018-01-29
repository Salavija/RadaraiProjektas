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





// Route::get('about', function () {
// 	// $about=\App\Radar::where($date['2018-01-10 21:25:14'], $number['BSC232'], $speed('20'));
// 	$date = '2018-01-10 21:25:14';
// 	$number="BSC232";
// 	$speed= 20;

// 	return view('about', compact('date', 'number', 'speed'));
// });

// Route::get('radars', function() {
// 	$radars=[
// 		['number'=>'AAA111', 'speed'=> 588],
// 		['number'=>'AAA111', 'speed'=> 588],
// 		['number'=>'AAA111', 'speed'=> 588],
// 		['number'=>'AAA111', 'speed'=> 588],
// 	];
// 	return view('about', compact('radars'));
// });

// Route::get('radars', function() {
// 		// $radars=DB::table('radars')->get();
// 		$radars=\App\Radar::all();

// 			return view('radars', compact('radars'));
// });

// Route::get('radars/{number}', function($number) {
// 	// $radar = DB::table('radars')->find($id);
// 	$radar = \App\Radar::where('number', $number)->first();

// 	return view('radar', compact('radar'));
// });


// Route::get('drivers', function() {
// 		// $radars=DB::table('radars')->get();
// 		$radars=\App\Driver::all();

// 			return view('drivers', compact('drivers'));
// });

// Route::get('drivers/{name}', function($name) {
// 	// $radar = DB::table('radars')->find($id);
// 	$driver = \App\Driver::where('name', $name)->first();
	
// 	return view('driver', compact('driver'));
// });

// Route::get('radars', "RadarsController@index") ->name('home');

//vienas būdas:
// Route::resource('radars', "RadarsController");


//kitas būdas išvest routes:

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function() {

	Route::get('radars', "RadarsController@index")-> name('radars.index');
	Route::get('radars/create', "RadarsController@create")->name('radars.create');
	Route::put('radars', "RadarsController@store")->name('radars.store');
	// Route::get('radars/{radar}', "RadarsController@show")->name('radars.show');
	Route::get('radars/{radar}/edit', "RadarsController@edit")->name('radars.edit');
	Route::put('radars/{radar}', "RadarsController@update")->name('radars.update');
	Route::delete('radars/{radar}', "RadarsController@destroy")->name('radars.destroy');
	Route::post('radars/{radar}/restore', "RadarsController@restore")->name('radars.restore');

	Route::get('drivers', "DriversController@index")->name('drivers.index');
	Route::get('drivers/create', "DriversController@create") ->name('drivers.create');
	Route::post('drivers', "DriversController@store")->name('drivers.store');
	// Route::get('drivers/{driver}', "DriversController@show")->name('drivers.show');
	Route::get('drivers/{driver}/edit', "DriversController@edit")->name('drivers.edit');
	Route::put('drivers/{driver}', "DriverssController@update")->name('drivers.update');
	Route::delete('drivers/{driver}', "DriversController@destroy")->name('drivers.destroy');
	Route::post('drivers/{driver}/restore', "DriversController@restore")->name('drivers.restore');

});



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
