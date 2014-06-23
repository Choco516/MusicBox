<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	private $folder = 'media/profiles';

	public function index()
	{
		$files = File::files($this->folder);
		$this->layout->nest('content', 'index')->with('images',$files);
	}

	public function store()
	{
		

			$file = Input::file('filename');
			$name = $file->getClientOriginalName();

			//$upload = $file->move($this->folder.'/',$name);
			$audio = new audio;

			$audio->nombre = $file->getClientOriginalName();
			$audio->audio = Input::file('filename');

			if ($audio->save()) {
				Session::flash('message','Guardado correctamente');
				Session::flash('class','success');
			} else {
				Session::flash('message','Error al guardar');
				Session::flash('class','danger');
			}
			
		
		return Redirect::to('/');
	}

}
