<?php
    namespace App\Http\Controllers;
    class UserController extends Controller
    {


		public function UserShowL()
		{
			$name = 'USER1Georgiy';
			$surname = 'USER1Medvedev';
			return view('user.user', [
				'title' => 'USER',
				'text' => 'Surname',
				'surname' => $surname,
				'texts' => 'Name',
				'name' => $name,
			]);
		}
        public function UserShowR()
        {
            $name = 'USER2Georgiy';
			$surname = 'USER2Medvedev';
			
        }
	}
	 
?>