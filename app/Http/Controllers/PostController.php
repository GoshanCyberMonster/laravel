<?php
    namespace App\Http\Controllers;

    class PostController extends Controller
    {

		public function postshow($id)
		{
			$posts = [
				1 => 'текст 1',
				2 => 'текст 2',
				3 => 'текст 3',
				4 => 'текст 4',
				5 => 'текст 5',
			];
			
			return $posts[$id];
		}
	
		public function show()
			{
				return view('post.show', [
				'title' => 'page title',
				'text'  => 'page content',
			]);

			}
			public function usershow($user){
				$users = [
			'user1' => 'city1',
			'user2' => 'city2',
			'user3' => 'city3',
			'user4' => 'city4',
			'user5' => 'city5',
		];
	
		if (array_key_exists($user, $users)){
				return $users[$user];
				}
				else {
					print('404');
				}
			}

			public function sshow()
			{
				return view('post.show', ['var1' => '1', 'var2' => '2']);
			}

			// public function message()
			// {
			// 	$message = 'ffasjffjfff'
			// 	return view('post.show')

			// }
    
	}
	 
?>
