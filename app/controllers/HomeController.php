<?php

class HomeController extends BaseController {

	public function index()
	{
		$this->layout->nest('content', 'index');
	}

	public function store()
	{
			$audioFile = Input::file('filename');
			$name = $audioFile->getClientOriginalName();
			$extension=$audioFile->getClientOriginalExtension();
			if($extension=="mp3"||$extension=="wav"||$extension=="ogg")
			{
				$profiles = public_path(). "/media/profiles";
				$downloadfiles = public_path(). "/media/DownloadFiles";
				$upload = $audioFile->move($profiles,$name);
				$audio = new audio;
				$audio->nombre = $name;
				$audio->audio = $audioFile;
				$audio->save();

				$selected_radio = $_POST['tipo'];
				$name1 = strlen($name) - 4;
				$name2 = substr($name,0, $name1);

				if ($selected_radio == "wav")
				{
					exec ("sudo sox " . $profiles . "/".$name . " ". $downloadfiles . "/". $name2 . ".wav");
				}
				elseif($selected_radio == "mp3")
				{
					exec ("sudo sox " . $profiles . "/".$name . " ". $downloadfiles . "/". $name2 . ".mp3");
				}
				else
				{
					exec ("sudo sox " . $profiles . "/".$name . " ". $downloadfiles . "/". $name2 . ".ogg");
				}


				$file= public_path(). "/media/DownloadFiles/". $name2 . "." . $selected_radio;
				return Response::download($file, $name2 . "." . $selected_radio);
			}
			else
			{
				Session::flash('message','Incompatible file, please select an audio file with MP3, WAV or OGG extension');
				Session::flash('class','danger');
			}
		return Redirect::to('/');
	}

}
