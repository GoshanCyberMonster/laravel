<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


 	Route::get('/post/show',  [PostController::class, 'show']);
	Route::get('/user/user',  [UserController::class, 'UserShowL']);

?>

	
	

	


