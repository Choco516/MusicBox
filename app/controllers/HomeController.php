<?php

class HomeController extends BaseController {


	private $folder = "/media/profiles";
	private $downloadfiles = "/media/DownloadFiles";

	public function index()
	{
		$files = File::files($this->folder);
		$this->layout->nest('content', 'index')->with('images',$files);
	}

	public function store()
	{

			$audioFile = Input::file('filename');
			$name = $audioFile->getClientOriginalName();
			$extention=$audioFile->getClientOriginalExtension();
			if($extention=="mp3"||$extention=="wav")
			{
				$folder = public_path(). "/media/profiles";
				$downloadfiles = public_path(). "/media/DownloadFiles";
				$upload = $audioFile->move($folder,$name);
				$selected_radio = $_POST['tipo'];
				$largo = strlen($name) - 4;
				$name2 = substr($name,0, $largo);
				if ($selected_radio == "wav")
				{
					exec ("sudo sox " . $folder . "/".$name . " ". $downloadfiles . "/". $name2 . ".wav");
				}elseif($selected_radio == "MP3")
				{
					exec ("sudo sox " . $folder . "/".$name . " ". $downloadfiles . "/". $name2 . ".mp3");
				}else
				{
					exec ("sudo sox " . $folder . "/".$name . " ". $downloadfiles . "/". $name2 . ".ogg");
				}
				
				
				$file= public_path(). "/media/DownloadFiles/". $name2 . "." . $selected_radio;
					$headers = array(
					'Content-Type: audio/mp3',
				);
				return Response::download($file, $name2 . "." . $selected_radio, $headers);

				$audio = new audio;
				$audio->nombre = $name;
				$audio->audio = Input::file('filename');
				


				if ($audio->save()) {
					Session::flash('message','Guardado correctamente');
					Session::flash('class','success');
				} else {
					Session::flash('message','Error al guardar');
					Session::flash('class','danger');
				}	
			}else
			{
				Session::flash('message','Archivo Incompatible');
				Session::flash('class','danger');
			}
		return Redirect::to('/');
	}

}
