<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllerr extends Controller
{
    public function showUser($name){
        
        $users = [
        'user11' => "Привееет {$name}",
		'user21' => $name
        ];
        
        return $users[$name];
    }
}
