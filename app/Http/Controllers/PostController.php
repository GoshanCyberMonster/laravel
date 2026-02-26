<?php
    namespace App\Http\Controllers;
    class PostController extends Controller
    {


		public function show()
		{
			$name = 'POSTGeorgiy';
			$surname = 'POSTMedvedev';
			return view('post.show', [
				'title' => 'POST',
				'text' => 'Surname',
				'surname' => $surname,
				'texts' => 'Name',
				'name' => $name,
			]);
		}
	}
	 
?>
