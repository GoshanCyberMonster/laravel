<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/posts', function () {
// 		return 'список постов';
// 	});

    
    // Route::get('/user/all', function () {
	// 	return 'all';
	// });
    // Route::get('/user/{id}', function ($id) {
	// 	return 'id';
	// });

    // Route::get('/user/all', function () {
	// 	return 'all';
	// });
    // Route::get('/user', function () {
	// 	return 'user';
	// });
	// Route::get('/user/{id?}', function ($id = null) {
	// 	return 'id';
	// });

    // Route::get('/user/{id}', function ($id) {
	// 	return 'id';
	// })->where('id', '[0-9]+');
    // Route::get('/user/{slug}', function ($slug) {
	// 	return 'idss';
	// })->where('slug', '[a-z0-9_-]+');
	

	Route::get('/post/{id}', [PostController::class, 'usershow']);

// Route::get('/post', [PostController::class, 'sshow']);

 Route::get('/user/{name}',  [ArticleControllerr::class, 'showUser']);
 Route::get('/user/{name333321345}',  [ArticleControllerr::class, 'showUser']);

?>

	
	

	


