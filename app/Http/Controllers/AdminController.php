<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use App\Location;
use Request;

class AdminController extends Controller {

    public function dashboard(){

        $articles = Article::all();

        return view('admin.dashboard', ['page' => 'Dashboard', 'articles' => $articles]);
    }

    public function blogger(){

        return view('admin.blogger', ['page' => 'Blogger']);
    }

    public function location(){

        $locations = Location::all();

        return view('admin.location', ['page' => 'Location', 'locations' => $locations]);
    }

    public function login(){

        return view('admin.login');
    }

    public function store(){

        $input = Request::all();

        Article::create($input);

        return redirect('admin/dashboard');
    }

    public function store_location(){

        $input = Request::all();

        Location::create($input);

        return redirect('admin/location');
    }

}
